<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ $title }}</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }} ">
  <link rel="stylesheet" href="{{ asset('/font_size.css') }}">
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
  <link rel="stylesheet" href="{{ asset('skydash/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('skydash/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('skydash/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('skydash/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('skydash/js/select.dataTables.min.css') }}">
  <!-- End plugin css for this page -->

  <link rel="stylesheet" href="{{ asset('leaflet/leaflet.css') }}" />

  <!-- inject:css -->
  <link rel="stylesheet" href=" {{ asset('skydash/css/vertical-layout-light/style.css') }}">
  <link rel="stylesheet" href="{{ asset('sweetalert2-theme-bootstrap-4/bootstrap-4.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('images/logo-mui-small.png') }}"/>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('layout.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      @include('layout.theme-setting')
            @include('layout.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
         @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
            @include('layout.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <div class="preloader">
    <div class="loading">
      <img src="{{ asset('/images/loader.gif') }}">
    </div>
    <p class="text-loading">Harap Tunggu</p>
  </div>

  <style>
    * {
      scroll-behavior: smooth;
    }
  </style>

<style type="text/css">
  .preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background-color: #fff;
  }
  .preloader .loading {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    font: 14px arial;
  }
  .preloader .text-loading  {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    font: 14px arial;
  }
  </style>

  <!-- plugins:js -->
  <script src="{{ asset('leaflet/leaflet.js') }}"></script>
  <script src="{{ asset('bootstrap/css/bootstrap.js') }} "></script>
  <script src="{{ asset('skydash/vendors/js/vendor.bundle.base.js') }} "></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('skydash/vendors/chart.js/Chart.min.js') }} "></script>
  <script src="{{ asset('skydash/vendors/datatables.net/jquery.dataTables.js') }} "></script>
  <script src="{{ asset('skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('skydash/js/dataTables.select.min.js') }} "></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('skydash/js/off-canvas.js') }}"></script>
  <script src="{{ asset('skydash/js/hoverable-collapse.js') }} "></script>
  <script src="{{ asset('skydash/js/template.js') }} "></script>
  <script src="{{ asset('skydash/js/settings.js') }} "></script>
  <script src="{{ asset('skydash/js/todolist.js') }} "></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  {{-- <script src="{{ asset('skydash/js/chart.js') }}"></script> --}}
  <script src="{{ asset('skydash/js/dashboard.js') }} "></script>
  <script src=" {{ asset('skydash/js/Chart.roundedBarCharts.js') }} "></script>
  <script src="{{ asset('sweetalert2/sweetalert2.js') }} "></script>
  {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
  <!-- End custom js for this page-->
</body>

@yield('script')

<script>
  $(document).ready(function(){
  $('#table_cluster').DataTable();
  $('#table_cluster1').DataTable();
  $('#table_cluster2').DataTable();
  $('#table_cluster3').DataTable();
  $('#table_cluster4').DataTable();
  $('#table_cluster5').DataTable();
  $('#table_cluster6').DataTable();
  $('#table_cluster7').DataTable();
  $('#table_cluster8').DataTable();
  $('#table_cluster9').DataTable();
  $('#table_cluster10').DataTable();
  $('#table_getCluster').DataTable();
  $('#table_getCluster1').DataTable();
  $('#table_getCluster2').DataTable();
  $('#table_getCluster_masjid').DataTable();
  $('#table_getCluster_penceramah').DataTable();
  $('#table_penceramah').DataTable();
  $('#table_pengujian').DataTable();
  $('#table_masjid').DataTable();
  $(".preloader").fadeOut();
  })
</script>

