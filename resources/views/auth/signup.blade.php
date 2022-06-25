<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <meta charset="UTF-8"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth/signin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/floating-labels.css') }}">

    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <div class="container-fluid ps-md-0">
        <div class="row g-0">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <p class="h1 text-center text-bold">Haloo!</p>
                                <p class="text-center mb-5 text-gray">Selamat datang di <span class="text-blue">JAPIN!</span> Asah pengetahuanmu untuk terus berkembang.</p>

                                <!-- Sign In Form -->
                                <form action="{{url('/dashboard')}}">
                                    @csrf
                                    <div class="form-label-group outline mb-3">
                                        <input type="text" id="tt8" class="form-control shadow-none rounded-5" placeholder="user@gmail.com" />
                                        <span><label for="tt8">Nama Lengkap</label></span>
                                    </div>
                                    <div class="form-label-group outline mb-3">
                                        <input type="text" id="tt8" class="form-control shadow-none rounded-5" placeholder="user@gmail.com" />
                                        <span><label for="tt8">Username</label></span>
                                    </div>
                                    <div class="form-label-group outline mb-3">
                                        <input type="email" id="tt8" class="form-control shadow-none rounded-5" placeholder="user@gmail.com" />
                                        <span><label for="tt8">Email</label></span>
                                    </div>
                                    <div class="form-label-group outline mb-3">
                                        <input type="number" id="tt8" class="form-control shadow-none rounded-5" placeholder="user@gmail.com" />
                                        <span><label for="tt8">Kelas</label></span>
                                    </div>
                                    <div class="form-label-group outline mb-3">
                                        <input type="text" id="tt8" class="form-control shadow-none rounded-5" placeholder="user@gmail.com" />
                                        <span><label for="tt8">Tingkat</label></span>
                                    </div>
                                    <div class="form-label-group outline mb-3">
                                        <input type="text" id="tt8" class="form-control shadow-none rounded-5" placeholder="user@gmail.com" />
                                        <span><label for="tt8">Asal Sekolah</label></span>
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-primary my-4 rounded" type="submit">Daftar</button>
                                    </div>

                                    <div>
                                        <p class="mb-0 text-center text-gray">Kamu sudah memiliki akun? <a href="" class="fw-bold link-primary text-decoration-none">Masuk disini</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
