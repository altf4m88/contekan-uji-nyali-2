<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Print</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/icon.png')}}">
</head>
<body>
    <div class="container d-flex flex-column align-items-center">
        <div class="w-100 d-flex flex-column align-items-center justify-content-center">
            <h2>Pendaftaran Peserta Didik Baru</h1>
            <h2>SMK Semangat 45</h1>
            <p>Jl. Jalan No. 5, Jawa Utara</p>
        </div>
        <hr>
        <div class="d-flex w-75 justify-content-around">
            <div class="d-flex flex-column">
                <p>Tanggal Daftar :</p>
                <p>No. Daftar :</p>
                <p>Nama Lengkap :</p>
                <p>Alamat :</p>
                <p>Asal Sekolah :</p>
                <p>Agama :</p>
                <p>Jurusan :</p>
            </div>
            <div class="d-flex flex-column">
                <p class="ml-3">{{$data['date']}}</p>
                <p class="ml-3">{{$data['detail']->id}}</p>
                <p class="ml-3">{{$data['detail']->fullname}}</p>
                <p class="ml-3">{{$data['detail']->address}}</p>
                <p class="ml-3">{{$data['detail']->junior_high_school}}</p>
                <p class="ml-3">{{$data['detail']->religion}}</p>
                <p class="ml-3">{{$data['detail']->major}}</p>
            </div>
        </div>
    </div>
</body>
<script>
    window.print();
</script>
</html>
