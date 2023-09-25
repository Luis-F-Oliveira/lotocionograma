<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/lotocionograma/body.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lotocionograma/sidebar/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lotocionograma/sidebar/header.css') }}">
    <title>Lotocionograma - System</title>
</head>
<body>
    @include('templates/sidebar')
    <script src="https://kit.fontawesome.com/cd57c86845.js"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>