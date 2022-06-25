@extends('user.navbar')

@section('title')
    NILAI
@endsection

@section('main')
    <div class="container pt-4">
        <p class="h3 text-center text-bold text-blue">NILAI</p>

        <div class="row pt-4">
            <p class="h5 text-bold">Matematika</p>
            <div class="row bg-blue mx-2 p-3 rounded">
                <p class="text-bold">Progress</p>
                <div class="progress">
                    <div class="progress-bar rounded" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
                <p class="text-bold pt-3">Nilai    : 100</p>
            </div>
        </div>

        <div class="row pt-4">
            <p class="h5 text-bold">IPA</p>
            <div class="row bg-blue mx-2 p-3 rounded">
                <p class="text-bold">Progress</p>
                <div class="progress">
                    <div class="progress-bar rounded" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
                <p class="text-bold pt-3">Nilai    : 0</p>
            </div>
        </div>

        <div class="row pt-4">
            <p class="h5 text-bold">Bahasa Indonesia</p>
            <div class="row bg-blue mx-2 p-3 rounded">
                <p class="text-bold">Progress</p>
                <div class="progress">
                    <div class="progress-bar rounded" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
                <p class="text-bold pt-3">Nilai    : 0</p>
            </div>
        </div>
    </div>
@endsection
