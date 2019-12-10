@extends('layouts.backend')

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('assets/home/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/assets/css/demo/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/assets/vendors/css/vendor.bundle.base.css')}}">
<link rel="shortcut icon" href="{{asset('assets/admin/assets/images/favicon.png')}}" />

<div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                  <h6 class="card-title card-padding pb-0">Ubah Data Cuaca untuk {{$weather->dteday}}</h6>
                    <div class="table-responsive">
                      <form action="{{route('dashboard.update',$weather->id)}}" method="POST">
                        @method('PUT')
                        <table class="table">
                            <thead>
                              <tr>
                                <th>Suhu</th>
                                <th>Kelembaban</th>
                                <th>Kecepatan Angin</th>
                                <th>Weathersit</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>

                      {{ csrf_field() }}
                      <td><input class="input" type="text" name="temp" value="{{$weather->temp}}"></td>
                      <td><input class="input" type="text" name="hum" value="{{$weather->hum}}"></td>
                      <td><input class="input" type="text" name="windspeed" value="{{$weather->windspeed}}"></td>
                      <td><input class="input" type="text" name="weathersit" value="{{$weather->weathersit}}"></td>
                      <td><input class="btn_simpan" type="submit" value="Simpan"></td>
                      </tr>
                    </tbody>
                  </table>
                      </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </main>
        <!-- partial:../../partials/_footer.html -->
        <footer>
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                <span class="tx-14">Copyright © 2019 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex justify-content-end">
                <div class="d-flex align-items-center">
                  <a href="">Documentation</a>
                  <span class="vertical-divider"></span>
                  <a href="">FAQ</a>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
@endsection
