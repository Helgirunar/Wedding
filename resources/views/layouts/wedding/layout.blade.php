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
    <body class="bg-slate-300">
        {{ $slot }}
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