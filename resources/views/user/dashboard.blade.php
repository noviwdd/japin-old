@extends('user.navbar')

@section('title')
    JAPIN
@endsection

@section('main')

    <div class="container-fluid">
        <div class="container col-xxl-12 pt-5 py-4">
            <div class="row flex-lg-row align-items-center g-5">
                <div class="col-12 col-lg-6 col-md-12 col-sm-12 pl-n1 mobile-flex">
                    <p class="display-6 text-bold lh-1 mb-1">Belajar kapanpun dan dimanapun hanya di <span class="text-blue">JAPIN</span></p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a class="btn btn-primary btn-lg px-4 me-md-2 rounded-pill fs-6 my-3 shadow">Unduh Aplikasi</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-6 offset-lg-0 offset-xl-0 d-none d-lg-block bg-transparent">
                    <img src="{{ asset("img/online-learning.svg") }}" class="d-block mx-lg-auto img-fluid"
                        alt="Bootstrap Themes" width="300" height="30" loading="lazy">
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container p-5 mb-4">
        <div class="row">
            <div class="col">
                <div class="col-12 col-lg-6 col-md-12 col-sm-12 pl-n1 mobile-flex">
                    <p class="h3 text-bold lh-1 mb-1">Selamat Datang,</p>
                    <p class="h3 text-bold lh-1 mb-1 text-blue">Baskara Putra</p>

                </div>
            </div>
        </div>
    </div> --}}
    @endsection
