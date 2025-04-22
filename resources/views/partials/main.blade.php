<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('select2/css/select2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('select2-bootstrap/select2-bootstrap-5-theme.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('bootstrap-icons/font/bootstrap-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('sweetalert/sweetalert2.min.css') }}" />
    <script src="{{ asset('sweetalert/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('numeral/numeral.min.js') }}"></script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <link href="{{ asset('dist/sticky-footer-navbar.css') }}" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

    @yield('content')

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('select2/js/select2.min.js') }}"></script>

    <script>
        function updateDateTime() {
            const now = new Date();
            const options = {
                // weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: false
            };
            document.getElementById('div-waktu').innerText = now.toLocaleDateString('en-ID', options);
        }

        setInterval(updateDateTime, 1000);

        document.addEventListener('DOMContentLoaded', updateDateTime);
    </script>


    @stack('javascript')
</body>


</html>
