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
                    <p class="fs-5 text-bold text-bold text-blue">Bangun Datar</p>
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
                    <div class="col">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{url('/materi/bangun-datar')}}" class="text-decoration-none"><p class="h6 text-bold text-blue">Definisi</p></a>
                            </div>
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{url('/materi/bangun-datar/rumus')}}" class="text-decoration-none"><p class="h6 text-bold text-blue">Rumus</p></a>
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
        </div>
        {{-- </div> --}}
@endsection
