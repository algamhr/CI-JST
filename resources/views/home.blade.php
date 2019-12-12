@extends('layouts.backend')

@section('content')

 <!-- partial -->
 <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8">
                <div class="mdc-card">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-2 mb-sm-0">Quick Add data </h4>
                    <div class="d-flex justtify-content-between align-items-center">
                    </div>
                  </div>
                  <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Import User Data</button>

                </form>

                  <div class="chart-container mt-4">
                    <canvas id="revenue-chart" height="260"></canvas>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4 mdc-layout-grid__cell--span-8-tablet">
                <div class="mdc-card">
                  <div class="d-flex d-lg-block d-xl-flex justify-content-between">
                    <div>
                      <h4 class="card-title">Cuaca Hari Ini</h4>
                      <h6 class="card-sub-title" >

                        {{$weather->dteday}}

                        </h6>
                    </div>
                    <div id="sales-legend" class="d-flex flex-wrap">


                    </div>
                  </div>
                  <div class="chart-container mt-4">
                      @if ($weather->weathersit == '1')
                      {{ "Cerah" }}
                      <img src="{{asset('assets/admin/assets/images/weather/1.sun.png')}}"
                          alt="" class="rounded mx-auto d-block" height="250px">


                      @elseif ($weather->weathersit == '2')
                      {{ "Hujan" }}
                      <img src="{{asset('assets/admin/assets/images/weather/2.rainy.png')}}"
                          alt="" class="rounded mx-auto d-block" height="250px">

                      @elseif ($weather->weathersit == '3')
                      {{ "Badai Petir" }}
                      <img src="{{asset('assets/admin/assets/images/weather/3.thunderstorm.png')}}"
                          alt="" class="rounded mx-auto d-block" height="250px">

                      @elseif ($weather->weathersit == '4')
                      {{ "Badai Hujan" }}
                      <img src="{{asset('assets/admin/assets/images/weather/4.windy.png')}}"
                          alt="" class="rounded mx-auto d-block" height="250px">

                      @endif
                    <canvas id="chart-sales" height="50">

                    </canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
        <!-- partial:partials/_footer.html -->
        </main>

@endsection
