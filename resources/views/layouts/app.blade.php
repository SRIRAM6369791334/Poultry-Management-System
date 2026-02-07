<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Poultry Management System</title>
    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
</head>

<body>
    <!-- Page Loader -->
    <div id="page-loader" class="c-loader-overlay">
        <div class="c-loader"></div>
        <div class="c-loader-text">Loading System...</div>
    </div>

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Topbar -->
    @include('layouts.header')
    
    @yield('content')

    <!-- Footer -->
    @include('layouts.footer')

    @yield('scripts')

  

    <script src="{{ asset('assets/js/global.js') }}"></script>
    <script src="{{ asset('assets/js/navigation.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/validation.js') }}"></script>

    <!-- Page Loader Script -->
    <script>
        window.addEventListener('load', function() {
            const loader = document.getElementById('page-loader');
            setTimeout(function() {
                loader.classList.add('is-hidden');
            }, 500); // Small delay for smooth feel
        });

        // Show loader on page unload (navigation)
        window.addEventListener('beforeunload', function() {
            const loader = document.getElementById('page-loader');
            loader.classList.remove('is-hidden');
        });
    </script>
</body>

</html>
