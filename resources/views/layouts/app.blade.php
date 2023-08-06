<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')::Объявления</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link href="/public/styles/main.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a href="{{ route('index') }}" class="navbar-brand me-auto"> Главная </a>

                @guest
                <a href="{{ route('register') }}" class="nav-item nav-link me-3"> Регистрация </a>
                <a href="{{ route('login') }}" class="nav-item nav-link"> Вход </a>
                @endguest

                @auth
                <a href="{{ route('home') }}" class="nav-item nav-link me-3"> Мои объявления </a>

                <form action="{{ route('logout') }}" method="POST" class="form-inline">
                    @csrf
                    <input type="submit" class="btn btn-danger" value="Выход">
                </form>
                @endauth
            </div>
        </nav>

    <div class="container">
        <h1 class="my-3 text-center">Объявления</h1>
        @yield('content')
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>


    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-06bfed51-48be-4205-939d-b1105b09b288"></div>

</body>
</html>
