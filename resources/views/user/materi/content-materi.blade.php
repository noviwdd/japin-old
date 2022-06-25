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
        <p class="h3">Geometri Bangun Datar</p>
        <p>Geometri Bidang Datar merupakan sebutan untuk berbagai bangun-bangun dua dimensi. Bangun datar adalah sebuah bidang datar yang dibatasi oleh garis lurus maupun garis lengkung.</p>
        <p><span class="text-bold">Geometri Bangun Datar </span>juga membahas mengenai konsep jarak baik antara dua titik maupun jarak titik ke garis. Di samping itu juga membahas mengenai titik tengah antara dua titik.</p>
        <p class="h5">A. Sudut Lancip</p>
        <p>Sudut lancip merupakan sudut yang besarnya lebih kecil dari 90&deg; serta lebih besar dari 0&deg; (0&deg;< a < 90&deg; )</p>
        <p class="h5">B. Sudut Siku-siku</p>
        <p>Sudut siku-siku merupakan sudut yang besarnya 90&deg;</p>
        <p class="h5">C. Sudut Tumpul</p>
        <p>Sudut tumpul merupakan sudut yang besarnya lebih kecil dari 180&deg; serta lebih besar dari 90&deg; (90&deg; < a < 180&deg; )</p>
        <p class="h5">D. Sudut Lurus</p>
        <p>Sudut lurus merupakan sudut yang besarnya 180&deg;</p>
        <p class="h5">E. Sudut Tumpul</p>
        <p>Sudut lingkaran penuh merupakan sudut yang besarnya 360&deg;</p>

        <hr>

        <p class="text-bold">Bagian-bagian Bangun Datar</p>
        <p class="h5">1. Titik (.)</p>
        <p>Titik adalah suatu noktah, sehingga tidak mempunyai panjang. Titik merupakan suatu bentuk yang paling sederhana dari geometri. Hal ini disebabkan titik hanya dipakai untuk menunjukkan posisi.</p>
        <p class="h5">2. Garis</p>
        <p>Suatu garis (garis lurus) bisa kita bayangkan sebagai kumpulan dari titik – titik yang memanjang secara tak terhingga pada ke kedua arah.
            Jika 2 titik dihubungkan maka akan didapatkan suatu suatu garis.</p>
        <p class="h5">3. Bidang </p>
        <p>Suatu bidang bisa kita anggap sebagai kumpulan titik yang jumlahnya tak terhingga sehingga akan membentuk permukaan rata yang melebar ke segala arah sampai tak terhingga.</p>

        <hr>

        <p class="text-end"><a href="{{url('materi/bangun-datar/rumus')}}" class="text-decoration-none text-gray">Halaman Selanjutnya - Rumus</a></p>
    </div>
</div>
@endsection
