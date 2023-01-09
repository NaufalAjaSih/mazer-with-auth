<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Mazer Admin Dashboard</title>

  <link rel="stylesheet" href="{{ asset('dist') }}/assets/css/main/app.css">
  <link rel="stylesheet" href="{{ asset('dist') }}/assets/css/main/app-dark.css">
  <link rel="shortcut icon" href="{{ asset('dist') }}/assets/images/logo/favicon.svg" type="image/x-icon">
  <link rel="shortcut icon" href="{{ asset('dist') }}/assets/images/logo/favicon.png" type="image/png">

  <link rel="stylesheet" href="{{ asset('dist') }}/assets/css/shared/iconly.css">

</head>

<body>
  <div id="app">
    @include('components.sidebar')
    <div id="main">
      <header class="mb-3">
        <a href="{{ asset('dist') }}/#" class="burger-btn d-block d-xl-none">
          <i class="bi bi-justify fs-3"></i>
        </a>
      </header>

      <div class="page-heading">
        <h3>Profile Statistics</h3>
      </div>
      <div class="page-content">
        @yield('content')
      </div>

      @include('components.footer')
    </div>
  </div>
  <script src="{{ asset('dist') }}/assets/js/bootstrap.js"></script>
  <script src="{{ asset('dist') }}/assets/js/app.js"></script>

  <!-- Need: Apexcharts -->
  <script src="{{ asset('dist') }}/assets/extensions/apexcharts/apexcharts.min.js"></script>
  <script src="{{ asset('dist') }}/assets/js/pages/dashboard.js"></script>

</body>

</html>