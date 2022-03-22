<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/icon.png')}}">
</head>
<body>
    @include('_navbar')
    <div class="container">
        <div class="d-flex mt-2 mb-2 justify-content-end">
            <div>
                <button class="btn btn-primary" id="show-create-modal" type="button" data-toggle="modal" data-target="#createModal">Tambah</button>
            </div>
        </div>
        @include('_table')
    </div>
    @include('_create_modal')
    @include('_edit_modal')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

<script>
    $('#show-create-modal').click(() => {
        $('#createModal').modal('show');
    })

    function showEdit(id) {
        const url = "/detail";

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: 'get',
            data: {
                id
            },
            dataType: 'json',
            url: url,
            beforeSend: function() {
                // const loading = `<div class="spinner spinner-border text-white" role="status">
                //     <span class="sr-only">Loading...</span>
                // </div>`;
                // $("#changeStatusButton").html(loading).attr('disabled', true);
            },
            success: function(response) {
                $('#register-id-input').val(response.id);
                $('#edit-fullname').val(response.fullname);
                $('#edit-address').val(response.address);
                $('#edit-junior-high-school').val(response.junior_high_school);

                if( response.gender === 'Perempuan') {
                    $('#edit-female-check').attr('checked', true);
                } else {
                    $('#edit-male-check').attr('checked', true);
                }
                $('#btn-print').attr('href', `/print/${response.id}`);

                $('#edit-religion').val(response.religion);
                $('#edit-major').val(response.major);

                $('#editModal').modal('show');
            },
            error: function(error) {

            }
        });

    }

    function deleteData() {
        const url = "/delete";

        let id = $('#register-id-input').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: 'post',
            data: {
                id
            },
            dataType: 'json',
            url: url,
            beforeSend: function() {
                // const loading = `<div class="spinner spinner-border text-white" role="status">
                //     <span class="sr-only">Loading...</span>
                // </div>`;
                // $("#changeStatusButton").html(loading).attr('disabled', true);
            },
            success: function(response) {
                window.location.reload();
            },
            error: function(error) {

            }
        });

    }
</script>
</html>
