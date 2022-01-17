@extends('layout.template')


@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Halo, {{ session('user_name') }}</h3>
          <h6 class="font-weight-normal mb-0">Sistem Penentuan Penceramah Masjid Paripurna Kota Pekanbaru <span class="text-primary"></span></h6>
        </div>
        <div class="col-12 col-xl-4">
         <div class="justify-content-end d-flex">
         </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card tale-bg">
        <div class="card-people mt-auto">
          <img src="images/gedung-mui.jpg" style="margin-top: -20px" alt="masjid">
          <div class="weather-info">
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin transparent">
      <div class="row">
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-tale">
            <div class="card-body card-hover">
              <p class="mb-4">Jumlah Cluster</p>
              <p class="fs-30 mb-2">5</p>
              {{-- <p>2.00% (30 days)</p> --}}
             
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-dark-blue">
            <div class="card-body card-hover">
              <p class="mb-4">Total Data Masjid & Penceramah</p>
              <p class="fs-30 mb-2">{{ $totalData }}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
          <div class="card card-light-blue">
            <div class="card-body card-hover">
              <p class="mb-4">Jumlah Mesjid</p>
              <p class="fs-30 mb-2">{{ $jumlahMasjid }}</p>
              {{-- <p>10.00% (30 days)</p> --}}
            </div>
          </div>
        </div>
        <div class="col-md-6 stretch-card transparent">
          <div class="card card-light-danger">
            <div class="card-body card-hover">
              <p class="mb-4">Jumlah Penceramah</p>
              <p class="fs-30 mb-2">{{ $jumlahPenceramah }}</p>
              {{-- <p>22.00% (30 days)</p> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


<style>
  .card-hover {
    transition: 0.5s;
  }

  .card-hover:hover {
    /* transition: 0.5s; */
    transform: translateX(10px);
  }
</style>

<?php if(session('login_success')) : ?>
  <script>
        window.addEventListener('load', () => {
          const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'success',
          title: 'Berhasil login!'
        })
        })
  </script>
<?php endif; ?>
    

