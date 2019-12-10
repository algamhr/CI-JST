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
        <a  href="/home "style="text-decoration:none"class="loginhref"><img src="{{asset('assets/admin/assets/images/user.png')}}" class="imguser"> LOGIN</a>
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
                      <div class="mdc-layout-grid__cell--span-4 mdc-layout-grid__cell--span-6-desktop stretch-card">
                        <div class="mdc-card">
                          <h6 class="card-title">Pengujian</h6>
                          <div class="template-demo">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input class="mdc-text-field__input" type="text" name="temp" id="text-field-hero-input">
                                                <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="text-field-hero-input" class="mdc-floating-label">Learning Rate</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                     </div>

                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="mdc-text-field__input" type="text" name="temp" id="text-field-hero-input">
                                        <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="text-field-hero-input" class="mdc-floating-label">Learning Rate</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" type="text" name="temp" id="text-field-hero-input">
                                            <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input" class="mdc-floating-label">Learning Rate</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input class="mdc-text-field__input" type="text" name="temp" id="text-field-hero-input">
                                                <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="text-field-hero-input" class="mdc-floating-label">Learning Rate</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>


                                        <td>
                                                <div class="template-demo">
                                                        <button type="submit" class="mdc-button mdc-button--unelevated">
                                                        Pengujian
                                                        </button>
                                            </td>
                                        </form>
                                        </div>
                                    </div>


                        </div>
                      </div>



                      <div class="mdc-layout-grid__cell--span-4 mdc-layout-grid__cell--span-6-desktop stretch-card">
                        <div class="mdc-card">
                          <h6 class="card-title">Hasil</h6>
                          <div class="template-demo">
                            <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


        <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">
                  <div class="mdc-layout-grid__cell--span-12 mdc-layout-grid__cell--span-6-desktop stretch-card">
                    <div class="mdc-card">
                      <h6 class="card-title">Pengujian</h6>
                      <h6 class="card-title card-padding pb-0">Data Cuaca</h6>
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
                                    <td class="text-left">{{$weather->dteday}}</td>
                                    <td>{{$weather->temp}}</td>
                                    <td>{{$weather->hum}}</td>
                                    <td>{{$weather->windspeed}}</td>
                                    <td>{{$weather->weathersit}}</td>
                                  </tr>
                              @endforeach
                          </tbody>
                        </table>
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
            $(document).ready(function() {
              $('#example').DataTable();
          } );
       </script>
</body>
</html>

