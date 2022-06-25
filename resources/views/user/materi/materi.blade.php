@extends('user.navbar')

@section('title')
    JAPIN - Materi
@endsection

@section('main')
    {{-- <div class="container-fluid bg-blue"> --}}
        <div class="container">
            <div class="row">
                <div class="col pt-5">
                    <form action="">
                        <div class="form-label-group outline mb-3">
                            <input type="text" id="tt8" class="form-control shadow-none rounded-5 border-primary" placeholder="cari" />
                            <span><label for="tt8" class="text-primary">Cari</label></span>
                        </div>
                    </form>
                </div>

            </div>
            <div class="row border-bottom border-primary pt-4">
                <div class="col-6">
                    <p class="fs-5 text-bold text-bold text-blue">Matematika</p>
                </div>
                <div class="col-6">
                    <p class="text-end">
                        <a class="" data-bs-toggle="collapse" href="#matematika" role="button" aria-expanded="false" aria-controls="matematika">
                            <i class="bi bi-plus-lg fs-4"></i>
                        </a>

                    </p>
                </div>
            </div>

            <div class="collapse" id="matematika">

                <div class="row justify-content-center align-items-center pt-4 pb-5">
                    <div class="col-2 col-lg-2 col-md-4 col-sm-4">
                        <a href="{{url('/materi/submateri')}}">
                            <img src="{{asset('img/math.png')}}" class="card-img-top img-fluid" width="100" height="" alt="...">
                        </a>
                    </div>
                    <div class="col-7 col-lg-10 col-md-8 col-sm-8">
                        <div class="row">
                            <div class="col-12">
                                <p class="h4 text-bold text-blue">Bangun Datar</p>
                            </div>
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center pt-4">
                    <div class="col-2 col-lg-2 col-md-4 col-sm-4">
                        <img src="{{asset('img/math-2.png')}}" class="card-img-top img-fluid" width="100" height="" alt="...">
                    </div>
                    <div class="col-7 col-lg-10 col-md-8 col-sm-8 pb-4">
                        <div class="row">
                            <div class="col-12">
                                <p class="h4 text-bold text-blue">Grafik</p>
                            </div>
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">25%</div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row border-bottom border-primary pt-4">
                <div class="col-6">
                    <p class="fs-5 text-bold text-bold text-blue">IPA</p>
                </div>
                <div class="col-6">
                    <p class="text-end">
                        <a class="" data-bs-toggle="collapse" href="#ipa" role="button" aria-expanded="false" aria-controls="ipa">
                            <i class="bi bi-plus-lg fs-4"></i>
                        </a>

                    </p>
                </div>
            </div>

            <div class="collapse" id="ipa">

                <div class="row justify-content-center align-items-center pt-4 pb-5">
                    <div class="col-2 col-lg-2 col-md-4 col-sm-4">
                        <img src="{{asset('img/ipa.png')}}" class="card-img-top img-fluid" width="100" height="" alt="...">
                    </div>
                    <div class="col-7 col-lg-10 col-md-8 col-sm-8">
                        <div class="row">
                            <div class="col-12">
                                <p class="h4 text-bold text-blue">Biologi</p>
                            </div>
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row border-bottom border-primary pt-4">
                <div class="col-6">
                    <p class="fs-5 text-bold text-bold text-blue">Indonesia</p>
                </div>
                <div class="col-6">
                    <p class="text-end">
                        <a class="" data-bs-toggle="collapse" href="#indo" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="bi bi-plus-lg fs-4"></i>
                        </a>

                    </p>
                </div>
            </div>

            <div class="collapse" id="indo">

                <div class="row justify-content-center align-items-center pt-4 pb-5">
                    <div class="col-2 col-lg-2 col-md-4 col-sm-4">
                        <img src="{{asset('img/indo.png')}}" class="card-img-top img-fluid" width="100" height="" alt="...">
                    </div>
                    <div class="col-7 col-lg-10 col-md-8 col-sm-8">
                        <div class="row">
                            <div class="col-12">
                                <p class="h4 text-bold text-blue">Bahasa Baku</p>
                            </div>
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- </div> --}}
@endsection
