@extends('user.navbar')

@section('title')
    PROFIL
@endsection

@section('main')
<div class="container pt-5">
    <div class="row">
        <div class="col">
            <table class="table table-borderless">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>Baskara</td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td class="px-2">12 (Dua Belas)</td>
                </tr>
                <tr>
                    <td>Sekolah</td>
                    <td>:</td>
                    <td>SMK 1 MDB</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>hindia@gmail.com</td>
                </tr>
            </table>
        </div>
        <div class="col">
            <img src="https://pbs.twimg.com/profile_images/1488548719062654976/u6qfBBkF_400x400.jpg" class="rounded-circle mx-auto d-block" alt="Cinque Terre" width="100" height="100">
        </div>
    </div>
    <div class="row">
        <p class="text-center"><a href="" class="btn btn-primary px-5">Edit Profil</a></p>
    </div>
</div>
@endsection
