<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('back/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('back/css/style.css') }}">
    <title>پنل مدیریت</title>
</head>
<body>

    @yield('content')

</body>
<script src="{{ asset('back/js/jquery.js') }}"></script>
    <script src="{{ asset('back/js/all.min.js') }}"></script>
    <script src="{{ asset('back/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('assets/vendor/ckeditor5/build/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    @yield('js')
</html>
