<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BotMan ChatBot</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
    <style>
        header {
            position: fixed;
            top: 10px;
            left: 20px;
            z-index: 1000;
        }
        .logo img {
            height: 90px;
            width: auto;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/realtyinterface_logo.png') }}" alt="ChatBot Logo">
        </div>
    </header>
</body>

<script>
    // for setting the background different from BotMan Widget
    document.addEventListener("DOMContentLoaded", function() {
        document.body.style.background = "none"; // Remove existing background
        document.documentElement.style.background = "none";

        // Apply new background color
        document.body.style.background = "linear-gradient(to bottom, #408591 5%, #E5F3F8FF 95%)";
        document.body.style.height = "100vh";
        document.body.style.margin = "0";
        document.body.style.padding = "0";
    });

    var botmanWidget = {
        aboutText: 'ChatBot',
        introMessage: 'Hi, Welcome to ChatBot',
    };
</script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
</html>
