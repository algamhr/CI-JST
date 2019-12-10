<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/home/style.css')}}">
    <title>Weather Prediction - Computational Intelligence</title>



    <link rel="stylesheet" href="{{asset('assets/admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/assets/css/demo/style.css')}}">
    <link  href="{{ asset('css/flatpicker.css') }}" rel="stylesheet">
    <link  href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <link rel='stylesheet' href='https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css'>
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <link  href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/toastr.min.js') }}"></script>


</head>
<body>
        <script src="{{asset('assets/admin/assets/js/preloader.js')}}"></script>
          <div class="body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
              <div class="mdc-drawer__header">
                <a href="/home" class="brand-logo">
                  <img src="{{asset('assets/admin/assets/images/logo.png')}}" alt="logo">
                </a>
              </div>
              <div class="mdc-drawer__content">
                <div class="user-info">
                  <p class="name">{{Auth::user()->name}}</p>
                  <p class="email">{{Auth::user()->email}}</p>
                </div>
                <div class="mdc-list-group">
                  <nav class="mdc-list mdc-drawer-menu">
                    <div class="mdc-list-item mdc-drawer-item">
                      <a class="mdc-drawer-link" href="/home">
                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                        Dashboard
                      </a>
                    </div>

                    <div class="mdc-list-item mdc-drawer-item">
                      <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menu">
                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                        Data Cuaca
                        <i class="mdc-drawer-arrow material-icons">chevron_right</i>
                      </a>

                      <div class="mdc-expansion-panel" id="ui-sub-menu">
                        <nav class="mdc-list mdc-drawer-submenu">
                            <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href=" {{route('dashboard.index')}}" >
                                    Lihat Data Cuaca
                                </a>
                            </div>
                            <div class="mdc-list-item mdc-drawer-item">
                                <a href="
                                {{route('dashboard.create')}}" class="mdc-drawer-link">
                                Tambah Data
                                </a>
                            </div>
                        </nav>
                      </div>


                    </div>


                  </nav>
                </div>
              </div>

              @include ('partial.message')

            </aside>
            <!-- partial -->
            <div class="main-wrapper mdc-drawer-app-content">
              <!-- partial:../../partials/_navbar.html -->
              <header class="mdc-top-app-bar">
                <div class="mdc-top-app-bar__row">
                  <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                    <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
                    <span class="mdc-top-app-bar__title">Welcome, {{Auth::user()->name}}!</span>
                  </div>
                  <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
                    <div class="menu-button-container menu-profile d-none d-md-block">
                      <button class="mdc-button mdc-menu-button">
                        <span class="d-flex align-items-center">
                          <span class="figure">
                            <img src="{{asset('assets/admin/assets/images/faces/face11.jpg')}}" alt="user" class="user">
                          </span>
                          <span class="user-name">{{Auth::user()->name}}</span>
                        </span>
                      </button>
                      <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                        <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">

                          <li class="mdc-list-item" role="menuitem">
                            <div class="item-thumbnail item-thumbnail-icon-only">
                              <i class="mdi mdi-account-edit-outline text-primary"></i>
                            </div>
                            <div class="item-content d-flex align-items-start flex-column justify-content-center">
                              <a href="{{route('users.edit',Auth::user())}}"> <h6 class="item-subject font-weight-normal">profile</h6></a>
                            </div>
                          </li>


                          <li class="mdc-list-item" role="menuitem">
                                <div class="item-thumbnail item-thumbnail-icon-only">
                                    <i class="mdi mdi-logout-variant text-primary"></i>
                                </div>

                                <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                  <h6 class="item-subject font-weight-normal">
                                         {{ __('Logout') }}
                                     </a>

                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         @csrf
                                     </form>
                                    </h6>
                                </div>
                              </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </header>


      @yield('content')
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
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="{{asset('assets/admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('assets/admin/assets/js/material.js')}}"></script>
  <script src="{{asset('assets/admin/assets/js/misc.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>

  <script src='https://code.jquery.com/jquery-3.3.1.js'></script>
  <!-- Datatables -->
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src='https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js'></script>
  <script src="{{ asset('js/select2.min.js') }}"></script>
  <script src="{{ asset('js/flatpicker.js') }}"></script>
  <script>
        flatpickr('#published_at',{
        enableTime: true,
        enableSeconds: true
        })

        $(document).ready(function() {
            $('.tags-selector').select2();
        });
    </script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
  } );
</script>

</body>
</html>
