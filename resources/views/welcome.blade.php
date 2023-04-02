<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="/favicon.ico">
    <title>start_app</title>
    <link href="{{ asset('/app.css') }}" rel="preload" as="style">
    <link href="{{ asset('/app.js') }}" rel="preload" as="script">
    <link href="{{ asset('/chunk-vendors.js') }}" rel="preload" as="script">
    <link href="{{ asset('/app.css') }}" rel="stylesheet">
</head>

<body><noscript><strong>We're sorry but start_app doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript>
    <div id="app"></div>
    <script src="{{ asset('/chunk-vendors.js') }}"></script>
    <script src="{{ asset('/app.js') }}"></script>
</body>

</html>
