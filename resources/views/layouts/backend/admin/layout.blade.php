<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wedding</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <script src="{{ mix('js/app.js') }}" defer></script>

    </head>
    <body class="bg-gray-100">
        <div class="flex w-full h-full">
            @include('layouts.backend.admin.navbar')
            {{ $slot }}
        </div>
        <div class="absolute w-1/5 bottom-0 left-4">
            @if(session('error'))
                <div id="alert-div cursor-pointer" class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
        @include('layouts.frontend.footer')
    </body>
</html>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var alertDiv = document.getElementById("alert-div");
    
        if (alertDiv) {
            alertDiv.addEventListener("click", function() {
                alertDiv.style.display = "none"; // Hide the alert
            });
        }
    });
</script>