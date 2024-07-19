<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Orange_Theme" data-layout="vertical"
  data-boxed-layout="boxed" data-card="shadow">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="{{ asset('user-assets/images/logos/favicon.png') }}">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('user-assets/css/styles.css') }}">
  <title>
    {{ $title ?? 'Stocktradelite' }}
  </title>
  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="{{ asset('user-assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">

  <link rel="stylesheet" href="{{asset('user-assets/libs/dropzone/dist/min/dropzone.min.css')}}">
  <link rel="stylesheet" href="{{asset('user-assets/libs/select2/dist/css/select2.min.css')}}">
  @vite("resources/js/app.js")
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

  @if(session('success'))
  <script>
    swal({
        title: "Success!",
        text: "{{ session('success') }}",
        icon: "success",
        button: "OK",
      })
  </script>
  @endif
  @if(session('error'))
  <script>
    swal({
        title: "Error!",
        text: "{{ session('error') }}",
        icon: "error",
        button: "OK",
      })
  </script>
  @endif

  @yield('content')

  <script src="{{ asset('user-assets/js/vendor.min.js') }}">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <!-- Import Js Files -->
  <script src="{{ asset('user-assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('user-assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
  <script src="{{ asset('user-assets/js/theme/app.init.js') }}"></script>
  <script src="{{ asset('user-assets/js/theme/theme.js') }}"></script>
  <script src="{{ asset('user-assets/js/theme/app.min.js') }}"></script>
  <script src="{{ asset('user-assets/js/theme/sidebarmenu.js') }}"></script>
  <!-- solar icons -->
  <script src="{{ asset('user-assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
  {{-- <script src="{{ asset('user-assets/js/dashboards/dashboard.js') }}"></script> --}}
  <script src="{{asset('user-assets/js/apps/contact.js')}}"></script>


  <script src="{{ asset('user-assets/libs/quill/dist/quill.min.js')}}"></script>
  <script src="{{ asset('user-assets/js/forms/quill-init.js')}}"></script>
  <script src="{{ asset('user-assets/libs/dropzone/dist/min/dropzone.min.js')}}"></script>
  <script src="{{ asset('user-assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
  <script src="{{ asset('user-assets/libs/select2/dist/js/select2.min.js')}}"></script>
  <script src="{{ asset('user-assets/js/forms/select2.init.js')}}"></script>
  <script src="{{ asset('user-assets/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>
  <script src="{{ asset('user-assets/libs/jquery-validation/dist/jquery.validate.min.js')}}"></script>
  <script src="{{ asset('user-assets/js/forms/repeater-init.js')}}"></script>
  {{-- <script src="{{ asset('user-assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script> --}}
</body>

</body>

</html>