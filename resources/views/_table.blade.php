<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">No Daftar</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Agama</th>
            <th scope="col">Asal SMP</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Tanggal Daftar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($registrations as $registration)
            <tr>
                <th scope="row">{{$registration->id}}</th>
                <td> <a href="#" class="text-primary text-decoration-none" onclick="showEdit({{$registration->id}})">{{$registration->fullname}}</a></td>
                <td>{{$registration->gender}}</td>
                <td>{{$registration->address}}</td>
                <td>{{$registration->religion}}</td>
                <td>{{$registration->junior_high_school}}</td>
                <td>{{$registration->major}}</td>
                <td>{{$registration->registered_at}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
