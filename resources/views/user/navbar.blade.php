<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/user/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/floating-labels.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <script src="{{ asset('js/app.js') }}"></script>

</head>
<body>
    <nav class="navbar navbar-expand-md px-4">
        <div class="container">
            <a class="navbar-brand text-bold" href="">
                <span class="fs-2">JAPIN</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
                <div class="ml-auto" role="search">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item me-4">
                            <a href="{{url('/dashboard')}}" class="nav-link text-bold text-blue">Beranda</a>
                        </li>
                        <li class="nav-item me-4">
                            <a href="{{url('/materi')}}" class="nav-link text-bold text-blue">Materi</a>
                        </li>
                        <li class="nav-item me-4">
                            <a href="{{url('/materi/bangun-datar/kuis')}}" class="nav-link text-bold text-blue">Kuis</a>
                        </li>
                        <li class="nav-item me-4">
                            <a href="{{url('nilai')}}" class="nav-link text-bold text-blue">Nilai</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-decoration-none text-bold text-blue" data-bs-toggle="dropdown" href="#" aria-expanded="false">Profil</a>
                            <div class="dropdown-menu dropdown-menu-end row bg-blue p-4 shadow-sm p-3 mb-5 bg-white rounded border-0">
                                <div class="col">
                                    <img src="https://pbs.twimg.com/profile_images/1488548719062654976/u6qfBBkF_400x400.jpg" class="rounded-circle mx-auto d-block" alt="Cinque Terre" width="100" height="100">
                                    <p class="text-center text-bold text-blue py-2">Nama Profil</p>
                                    <div class="row g-1">
                                        <div class="d-grid gap-2">
                                            <a class="btn btn-primary" href="{{url('profil')}}">Lihat Profil</a>
                                            <a class="btn btn-danger" href="{{ route('login') }}">Keluar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    @yield('main')
</body>
</html>
