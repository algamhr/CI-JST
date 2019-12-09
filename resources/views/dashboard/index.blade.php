@extends('layout.app')

@section('content')

<div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
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
                                <td><a href="{{ route('dashboard.edit',$weather->id) }}">Ubah</a>
                                  <a href="/dashboard/delete/{{$weather->id}}">Hapus</a></td>
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


    @section('js')
    <script src='https://code.jquery.com/jquery-3.3.1.js'></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src='https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js'></script>
  
  
    <script>
      $(document).ready(function() {
        $('#example').DataTable();
    } );
    <script>

    @endsection


@endsection
