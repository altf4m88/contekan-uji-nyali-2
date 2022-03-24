<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

//time end 9:35
//start time 7:30
//total 125 menit
class RegistrationController extends Controller
{
    public function index() {

        $registrations = Registration::orderBy('id', 'desc')->get();

        $registrationWithDate = [];
        foreach ($registrations  as $key => $registration) {

            $registrationWithDate[$key] = $registration;
            $date = Carbon::createFromDate($registration->created_at)->locale('id_ID')->tz('Asia/Jakarta');

            $registeredAt = $date->hour.':'. $date->minute .' '.$date->day.' '.$date->monthName.' '.$date->year;

            $registrationWithDate[$key]['registered_at'] = $registeredAt;
        }

        return view('dashboard')->with('registrations', $registrationWithDate);
    }

    public function create(Request $request) {

        $register = new Registration;
        $register->fullname = $request->nama;
        $register->address = $request->alamat;
        $register->junior_high_school = $request->asal_sekolah;
        $register->gender = $request->jk;
        $register->religion = $request->agama;
        $register->major = $request->jurusan;
        $register->photo = $request->file('foto')->getClientOriginalName();

        Storage::disk('public_uploads')->put("images/$register->photo", $request->file('foto'));

        $register->save();

        return redirect()->back();
    }

    public function update(Request $request) {

        $register = Registration::findOrFail($request->register_id);

        $register->fullname = $request->nama;
        $register->address = $request->alamat;
        $register->junior_high_school = $request->asal_sekolah;
        $register->gender = $request->jk;
        $register->religion = $request->agama;
        $register->major = $request->jurusan;

        $register->save();

        return redirect()->back();
    }

    public function detail(Request $request) {
        $detail = Registration::findOrFail($request->id);

        return response()->json($detail);
    }

    public function delete(Request $request) {
        Registration::findOrFail($request->id)->delete();

        return response()->json('ok');
    }

    public function print($id) {
        $detail = Registration::findOrFail($id);

        $date = Carbon::createFromDate($detail->created_at)->locale('id_ID');

        $data = [
            'detail' => $detail,
            'date' => $date->day.' '.$date->monthName.' '.$date->year,
        ];

        return view('print')->with('data', $data);
    }
}
