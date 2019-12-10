
@extends('layouts.backend')

@section('content')

<div class="page-wrapper mdc-toolbar-fixed-adjust">
<main class="content-wrapper">
<section class="ftco-section contact-section">
<div class="container">



<div class="mdc-layout-grid">
    <div class="mdc-layout-grid__inner">
    <div class="mdc-layout-grid__cell--span-12">
        <div class="mdc-card">

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
                              <th>Aksi</th>
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
                                    <td><a href="{{ route('dashboard.edit',$weather->id) }}"> <button type="button" class="btn btn-info btn-sm"> Ubah</button></a>
                                        @include('dashboard.delete')</td>

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

@endsection

