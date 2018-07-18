<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <title>@yield('title')</title>
</head>
<body>
<div class="container-fluid bg-light">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="col-xl-3 col-2">
                <a class="navbar-brand" href="/cars">
                    <img src="https://www.capitalcarcare.co.uk/images/ccc_logo.PNG" width="150px">
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/mua-xe">Mua xe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bán xe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tin-tuc">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/lienhe">Liên hệ</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
</div>

@section('body')
@show

<footer>
    <div class="container-fluid bg-dark mt-3">
        <div class="container text-center">
            <h2 class="text-white"><a href="/cars" class="badge badge-dark">An Thịnh AUTO</a></h2>
            <ul class="list-inline">
                <a class="badge badge-dark" href="/mua-xe">Mua Xe</a>
                <a class="badge badge-dark" href="#">Bán Xe</a>
                <a class="badge badge-dark" href="/tin-tuc">Tin Tức</a>
                <a class="badge badge-dark" href="#">Giới Thiệu</a>
                <a class="badge badge-dark" href="/lienhe">Liên Hệ</a>
                <a href="#" class="badge badge-dark">Thị Trường Xe</a>
            </ul>
            <p class="text-muted mb-0">Địa chỉ: 39 Lê Văn Lương - 99 Nguyễn Chánh</p>
            <p class="text-muted mb-0">Email: <a href="mailto:anthinh@gmail.com">anthinh@gmail.com</a></p>
            <p class="text-muted mb-0">Phone: <a href="tel:0961.694.594">0961.694.594</a></p>
            <p class="text-muted">An Thịnh AUTO © All rights reserved.</p>

        </div>
    </div>
</footer>
</body>
</html>