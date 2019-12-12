<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/home/style.css')}}">
    <title>Weather Prediction - Computational Intelligence</title>

    <link rel="stylesheet" href="{{asset('assets/admin/assets/css/demo/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/admin/assets/images/favicon.png')}}" />
    <link rel='stylesheet' href='https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css'>
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

</head>

<body style="background-image: linear-gradient(to right, #6574cd , #9561e2);">
    <div class="header">
        <div class="login">
            <a href="/home " style="text-decoration:none" class="loginhref"><img
                    src="{{asset('assets/admin/assets/images/user.png')}}" class="imguser"> LOGIN</a>
        </div>
        <div class="page-wrapper mdc-toolbar-fixed-adjust">
            <main class="content-wrapper">
                <section class="ftco-section contact-section">
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <div class="page-wrapper mdc-toolbar-fixed-adjust">
                                    <main class="content-wrapper">
                                        <div class="mdc-layout-grid">
                                            <div class="mdc-layout-grid__inner">
                                                <div
                                                    class="mdc-layout-grid__cell--span-12 mdc-layout-grid__cell--span-6-desktop stretch-card">
                                                    <div class="mdc-card">
                                                        <h6 class="card-title">Data Cuaca</h6>
                                                        <h6 class="card-title card-padding pb-0"><a
                                                                href="{{ route('normalisasi') }}"></a></h6>
                                                        <form action="/normalisasi" method="POST">
                                                            {{ csrf_field() }}
                                                            <div class="template-demo">
                                                                <button type="submit"
                                                                    class="mdc-button mdc-button--unelevated">
                                                                    Normalisasi
                                                                </button>
                                                                <div class="table-responsive">
                                                                    <table id="example" class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="text-left">Tanggal</th>
                                                                                <th>Suhu</th>
                                                                                <th>Kelembaban</th>
                                                                                <th>Kecepatan Angin</th>
                                                                                <th>Weathersit</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($weather as $weather)

                                                                            <tr>
                                                                                <td class="text-left"><input
                                                                                        type="hidden" name="dteday"
                                                                                        value="{{$weather->dteday}}">{{$weather->dteday}}
                                                                                </td>
                                                                                <td><input type="hidden" name="temp"
                                                                                        value="{{$weather->temp}}">{{$weather->temp}}
                                                                                </td>
                                                                                <td><input type="hidden" name="hum"
                                                                                        value="{{$weather->hum}}">{{$weather->hum}}
                                                                                </td>
                                                                                <td><input type="hidden"
                                                                                        name="windspeed"
                                                                                        value="{{$weather->windspeed}}">{{$weather->windspeed}}
                                                                                </td>
                                                                                <td>
                                                                                    @if ($weather->weathersit == '1')
                                                                                    <img src="{{asset('assets/admin/assets/images/weather/1.sun.png')}}"
                                                                                        alt="" height="25px">

                                                                                    @elseif ($weather->weathersit ==
                                                                                    '2')
                                                                                    <img src="{{asset('assets/admin/assets/images/weather/2.rainy.png')}}"
                                                                                        alt="" height="25px">

                                                                                    @elseif ($weather->weathersit ==
                                                                                    '3')
                                                                                    <img src="{{asset('assets/admin/assets/images/weather/3.thunderstorm.png')}}"
                                                                                        alt="" height="25px">

                                                                                    @elseif ($weather->weathersit ==
                                                                                    '4')
                                                                                    <img src="{{asset('assets/admin/assets/images/weather/4.windy.png')}}"
                                                                                        alt="" height="25px">

                                                                                    @endif
                                                                                </td>
                                                                            </tr>
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
            </main>
            <!-- partial -->
        </div>

        <script src='https://code.jquery.com/jquery-3.3.1.js'></script>
        <!-- Datatables -->
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src='https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js'></script>


        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });

        </script>
</body>

</html>
