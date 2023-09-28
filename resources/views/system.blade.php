<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}" type="image/x-icon">
    @include('import/css')
    <title>Lotacionograma - System</title>
</head>
<body class="bg-secondary-subtle">
    @include('templates/navigation/navbar')
    @include('templates/navigation/sidebar')
    @include('import/scripts')
</body>
</html>