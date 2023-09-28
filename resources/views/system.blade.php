<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}" type="image/x-icon">
    @include('import/css')
    <title>Lotacionograma - System</title>
</head>
<body>
    @include('templates/sidebar')
    @include('templates/perfil')

    <main>
        <div class="container pt-2">
            @include('templates/' . $slug)
        </div>
    </main>

    @include('import/scripts')
</body>
</html>