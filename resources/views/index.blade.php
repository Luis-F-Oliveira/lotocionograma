<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login/body.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login/image.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login/captcha.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}" type="image/x-icon">
    <title>Lotocionograma - Login</title>
</head>
<body>
    <div class="container-sm">
        <div class="row shadow">
            <div class="image col-lg-8 d-none d-lg-block rounded-start"></div>
            <div class="login col-lg-4 rounded-end rounded-sm rounded-lg bg-primary">
                <div class="container my-3">
                    <h1 class="fs-1 text-center text-white mb-4">Login <i class="fa-solid fa-user"></i></h1>
                    <form id="myForm" class="text-center">
                        <div class="form-floating mb-3 mx-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3 mx-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <label for="password">Password</label>
                        </div>
                        <div class="captcha rounded bg-light mb-4 mx-3 p-2">
                            <div class="display rounded mb-1 bg-primary d-flex justify-content-center align-items-center">
                                <span id="display" class="text-white fw-bold"></span>
                            </div>
                            <input id="captchaInput" name="captchaInput" class="border border-2 border-primary rounded text-center" type="text">
                        </div>
                        <div class="mt-4 mx-3 row">
                            <button class="btn btn-light">
                                Sing-In
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/cd57c86845.js"></script>
    <script type="module" src="{{ asset('js/login/display.js') }}"></script>
    <script type="module" src="{{ asset('js/login/form.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>