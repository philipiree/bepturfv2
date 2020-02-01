<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Vape Turf Dashboard</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

  <link href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
  {{-- <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script> --}}
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li style="padding-top: 7px;" class="nav-item d-none d-sm-inline-block inline text-center">
        <h5>Vape Turf Dashboard</h5>
      </li>
    </ul>

    {{-- <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li>
      <!-- Logout menu -->
      <li class="nav-item dropdown">
        <a id="navbarDropdown" id="navbarDropdownMenuLink" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <i class="now-ui-icons location_world"></i>
            {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">

                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Vape Turf</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          {{-- <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
            </ul>
          </li> --}}
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ 'dashboard' == request()->path() ? 'active' : '' }}">
            <i class="fa-fw fas fa-chart-line nav-icon"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{ 'monthly-reports' == request()->path() ? 'active' : '' }}">
            <a href="/monthly-reports" class="nav-link">
                <i class="fa-fw fas fa-chart-line nav-icon"></i>
              <p>Monthly Expenses</p>
            </a>
        </li>
          <li class="nav-item">
            <a href="/role-register" class="nav-link {{ 'role-register' == request()->path() ? 'active' : '' }}">
            <i class="fa-fw fas fa-user nav-icon"></i>
              <p>User Roles</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/listedproducts" class="nav-link {{ 'listedproducts' == request()->path() ? 'active' : '' }}">
                <i class="fa-fw fas fa-briefcase nav-icon"></i>
              <p>Products</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/categories" class="nav-link {{ 'product-categories' == request()->path() ? 'active' : '' }}">
                <i class="fa-fw fas fa-list nav-icon"></i>
              <p>Categories</p>
            </a>
          </li>
          <li class="nav-item {{ 'orders' == request()->path() ? 'active' : '' }}">
            <a href="/orders" class="nav-link">
            <i class="fa-fw fas fa-list nav-icon"></i>
              <p>Orders</p>
            </a>
          </li>
          <li class="nav-item {{ 'expenses' == request()->path() ? 'active' : '' }}">
            <a href="/expenses" class="nav-link">
            <i class="fa-fw fas fa-arrow-circle-right nav-icon"></i>
              <p>Expenses</p>
            </a>
          </li>
          <li class="nav-item {{ 'posts' == request()->path() ? 'active' : '' }}">
            <a href="/posts" class="nav-link">
            <i class="fa-fw fas fa-arrow-circle-right nav-icon"></i>
              <p>Blogs</p>
            </a>
          </li>
          <li class="nav-item {{ 'messages' == request()->path() ? 'active' : '' }}">
            <a href="/messages" class="nav-link">
            <i class="fa-fw fas fa-arrow-circle-right nav-icon"></i>
              <p>Messages</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
    @include('sweetalert::alert')
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="[ckeditor-build-path]/ckeditor.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
@yield('scripts')

 <!-- Chart SCRIPTS -->
<script src="{{ $salesChart->cdn() }}"></script>
        {!! $salesChart->script() !!}
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'editor1' );
    CKEDITOR.config.enterMode = CKEDITOR.ENTER_BR;
    CKEDITOR.config.forcePasteAsPlainText = true;
</script>
</body>
</html>
