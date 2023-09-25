<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/lotocionograma/body.css') }}">
    <title>Lotocionograma - System</title>
</head>
<body>

    <!-- <form action="{{ route('logout') }}" method="get">
        @csrf
        <input type="submit" value="Deslogar">
    </form> -->
    <script src="https://kit.fontawesome.com/cd57c86845.js"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>