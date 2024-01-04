<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Aldmic COOPN Digital') }}@yield('title')</title>

    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.min.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{  asset('favicon.ico')  }}" type="image/x-icon">

    {{-- Custom CSS --}}
    @stack('css')
    {{-- End of Custom CSS --}}
</head>
<body>
    {{-- Navbar --}}
    @include('layouts.partials.navbar')
    {{-- End of Navbar --}}

    {{-- Content --}}
    <main>
        @yield('content')
    </main>
    {{-- End of Content --}}
    
    {{-- Main Footer --}}
    @include('layouts.partials.footer')
    {{-- End of Main Footer --}}
    
    {{-- Mini Footer --}}
    @include('layouts.partials.mini-footer')
    {{-- End of Mini Footer --}}

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    {{-- Custom JS  --}}
    @stack('script')
    {{-- End of Custom JS --}}
</body>
</html>