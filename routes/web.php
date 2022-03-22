<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registrations', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'create']);
Route::post('/delete', [RegistrationController::class, 'delete']);
Route::patch('/register', [RegistrationController::class, 'update']);
Route::get('/detail', [RegistrationController::class, 'detail']);
Route::get('/print/{id}', [RegistrationController::class, 'print']);

