@extends('user.navbar')

@section('title')
    Japin - Bangun Datar
@endsection

@section('main')
<div class="container-fluid bg-blue">
    <div class="container col-xxl-12 pt-5 py-4">
        <div class="row flex-lg-row align-items-center g-5">
            <div class="col-12 col-lg-6 col-md-12 col-sm-12 pl-n1 mobile-flex">
                <p class="display-6 text-bold lh-1 mb-1 text-end text-blue">Bangun Datar</p>
                <p class="text-end">- Kelas 12 -</p>
            </div>
            <div class="col-12 col-sm-12 col-lg-6 offset-lg-0 offset-xl-0 d-none d-lg-block bg-transparent">
                <img src="{{ asset("img/math.png") }}" class="d-block mx-lg-auto img-fluid"
                    alt="Bootstrap Themes" width="300" height="30" loading="lazy">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-blue">
    <div class="container">
        <p class="h3">RUMUS</p>
        <p class="text-bold">Keliling dan Luas Bangun Datar</p>
        <p class="h5">1. Bujur Sangkar</p>
        <p>Suatu bangunan segi empat di mana keempat sisinya memiliki sama panjang serta keempat sudutnya adalah sudut siku-siku.</p>
        <img src="{{asset('img/bujur-sangkar.jpg')}}" alt="" class="img-fluid">
        <p>Panjang <br>
            AB = BC = CD = DA <br>
            Sebab panjang sisi-sisinya sama maka keliling dalam suatu persegi dinyatakan dengan: <br>
            K = AB + BC + CD + DA’ <br>
            Rumus yang biasa digunakan adalah: <br>
            K = 4s <br>
            L = s x s <br>
            L = s 2 <br>
        </p>

    <hr>

    <p class="text-end"><a href="{{url('materi/bangun-datar/kuis')}}" class="text-decoration-none text-gray">Halaman Selanjutnya - Kuis</a></p>
    </div>
</div>
@endsection
