<!DOCTYPE html>
<html llang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="login/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet" />
    <title>Sari Roti</title>
</head>

<body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
<div class="container">
    <h1 class="text-center" :status="session('status')">
        Online Reposrting System <br />
        PT Nippon Indosari Corpindo Tbk
    </h1>
    <div class="col justify-content-center alig-item-center">
        <div class="row border box-area justify-content-center alig-item-center">
            <form method="POST" action="{{ route('login') }}" class="justify-content-center alig-item-center">
                @csrf
                <img src="login/img/logo.png" alt="Sari Roti" class="img-fluid alig-item-center"
                    style="width: 300px;" />
                <div class="mb-3">
                    <label for="exampleInputEmail1" :value="__('Email')" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" autofocus autocomplete="username"
                        name="email" :value="old('email')" aria-describedby="emailHelp" />
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" :value="__('Password')" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" required autocomplete="current-password"
                        id="exampleInputPassword1" />
                </div>
                <button type="submit" class="btn btn-light">{{ __('Log in') }}</button>
            </form>
        </div>
    </div>
</div>
