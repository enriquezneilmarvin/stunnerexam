<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('public/sb-admin/fontawesome-free/css/all.min.css') }} " rel="stylesheet" type="text/css">

      <!-- Custom styles for this template-->
    <link href="{{ asset('public/css/sb-admin.css') }}" rel="stylesheet">

</head>



<body class="bg-dark">

    <main class="py-4">
        @yield('content')
    </main>
</body>

  <script src="{{ asset('public/sb-admin/jquery/jquery.min.js') }}"></script>

  <script src="{{ asset('public/sb-admin/bootstrap/js/bootstrap.bundle.min.js') }} "></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('public/sb-admin/jquery-easing/jquery.easing.min.js') }} "></script>
</html>
