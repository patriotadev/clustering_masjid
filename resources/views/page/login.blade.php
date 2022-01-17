<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ $title }}</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="skydash/vendors/feather/feather.css">
  <link rel="stylesheet" href="skydash/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="skydash/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="skydash/css/vertical-layout-light/style.css">
  <link rel="stylesheet" href="{{ asset('sweetalert2-theme-bootstrap-4/bootstrap-4.css') }}">

  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('images/logo-mui-small.png') }}"/>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="gradient-bg rounded auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo d-flex justify-content-center">
                <img src="{{ asset('images/logo-mui.png') }}" alt="logo">
              </div>
              <h4 class="text-center">Sistem Penentuan Penceramah Masjid Paripurna Kota Pekanbaru</h4>
              {{-- <h6 class="font-weight-light">Sign in to continue.</h6> --}}
              <form class="pt-3" method="POST" action="/login" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                  <input type="email" class="form-control @error('email') is-invalid @enderror form-control-lg" placeholder="Email" name="email" value="{{ old('email') }}">
                  @error('email')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <input type="password" class="form-control @error('password') is-invalid @enderror form-control-lg" placeholder="Password" name="password" value="{{old('password')}}">
                  @error('password')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">LOGIN</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
  <script src="{{ asset('sweetalert2/sweetalert2.js') }} "></script>

  <?php if(session('login_fail_pass')) : ?>
  <script>
        window.addEventListener('load', () => {
          Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Password salah!',
            showConfirmButton: false,
            timer: 1500
          })
        })
  </script>
<?php endif; ?>

  <?php if(session('login_fail')) : ?>
  <script>
        window.addEventListener('load', () => {
          Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Email tidak terdaftar!',
            showConfirmButton: false,
            timer: 1500
          })
        })
  </script>
<?php endif; ?>

  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="skydash/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="skydash/js/off-canvas.js"></script>
  <script src="skydash/js/hoverable-collapse.js"></script>
  <script src="skydash/js/template.js"></script>
  <script src="skydash/js/settings.js"></script>
  <script src="skydash/js/todolist.js"></script>
  
  <!-- endinject -->
</body>

</html>

<style>
  .content-wrapper {
    background-image: url('/images/login-bg2.jpg');
    background-position: center;
    background-size: cover
  }

  .auth-form-light {
    /* background-image: linear-gradient(to right, #fbc2eb, #a6c1ee) */
    opacity: 93%;
  }
</style>