<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'StudyNest | វេទិកាសិក្សា')</title>
    <meta name="description" content="@yield('description', 'StudyNest — វេទិកាសិក្សាសម្រាប់សិស្សានុសិស្សថ្នាក់ទី១២')">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@300;400;600;700&family=Poppins:wght@300;400;600;700&family=Rajdhani:wght@600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Base Styles -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    
    @yield('styles')
</head>
<body class="bg-dark">

    <!-- Animated Background -->
    <div class="drops" id="drops"></div>
    <div class="particles" id="particles"></div>

    <!-- Main Content -->
    @yield('content')

    <!-- Core Scripts -->
    <script src="{{ asset('assets/main.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize Background Animations if available
            if (typeof StudyNest !== 'undefined' && typeof StudyNest.initBackground === 'function') {
                StudyNest.initBackground();
            }
        });
    </script>
    @yield('scripts')
</body>
</html>
