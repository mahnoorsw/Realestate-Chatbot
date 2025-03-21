<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BotMan ChatBot</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">

</head>
<body>
</body>

<script>
    // for setting the background different from BotMan Widget
    document.addEventListener("DOMContentLoaded", function() {
        document.body.style.background = "none"; // Remove existing background
        document.documentElement.style.background = "none";

        // Apply new background color
        // document.body.style.backgroundColor = "#1791c8"; // Change this color as needed
        document.body.style.background = "url('/images/background1.webp') no-repeat center center fixed";
        document.body.style.backgroundSize = "cover";
    });

    var botmanWidget = {
        aboutText: 'ChatBot',
        introMessage: 'Hi, Welcome to ChatBot',
    };
</script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
</html>
