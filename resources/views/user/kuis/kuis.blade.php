<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KUIS</title>

    <link rel="stylesheet" href="{{ asset('css/user/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/floating-labels.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>


    <style>
        .btn{
            text-align: left;
        }
        .btn-gray {
            background-color: rgb(202, 202, 202) !important;
        }

        .btn-gray:hover {
            background-color: rgb(161, 159, 159) !important;
        }
    </style>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>


</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-between">
            <div class="col-auto me-auto">
                <p class="h3">Bangun Datar</p>
            </div>
            <div class="col-auto">
                <table class="table table-bordered rounded">
                    <tr>
                        <td class="m-1">Waktu Tersisa</td>
                        <td class="bg-secondary text-white">05</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="progress" style="height: 1px;">
            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="row pt-5">
            <p class="h5">1. Tentukanlah keliling dan juga luas dari sebuah persegi yang memiliki sisi 5 cm!</p>
            <div class="d-grid gap-2 text-left">
                <a class="btn btn-gray" type="button">A. 24 dan 20</a>
                <a class="btn btn-gray" type="button">B. 20 dan 25</a>
                <a class="btn btn-gray" type="button">C. 20 dan 24</a>
                <a class="btn btn-gray" type="button">D. 25 dan 20</a>

            </div>
        </div>

        <div class="row justify-content-between pt-4">
            <div class="col-auto me-auto">
                <p class="h6">1 dari 1 Pertanyaan</p>
            </div>
            <div class="col-auto">
                <a href="{{url('nilai')}}" class="btn btn-success finish">Selesai</a>
            </div>
        </div>
    </div>
</body>
</html>
