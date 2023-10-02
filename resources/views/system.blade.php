<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}" type="image/x-icon">
    @include('import/css')
    <title>Lotacionograma - {{ session('user')->name }}</title>
</head>
<body class="bg-secondary-subtle no-scroll">
    @include('templates/navigation/navbar')
    
    <main class="overflow-y-auto vw-100 vh-100">
        <div class="container-fluid">
            @include('templates/' . $slug)
        </div>
    </main>
    
    @include('templates/navigation/sidebar')
    @include('import/scripts')
</body>
</html>