<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta
    http-equiv="X-UA-Compatible"
    content="IE=edge"
  >
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1"
  >
  <meta
    name="description"
    content=""
  >
  <meta
    name="author"
    content=""
  >
  <link
    rel="icon"
    href="{{ asset('/admin/images/favicon.ico') }}"
  >
  <title>Sunny Admin - Dashboard</title>
  <link
    rel="stylesheet"
    href="{{ asset('/admin/css/vendors_css.css') }}"
  >
  <!-- Style-->
  <link
    rel="stylesheet"
    href="{{ asset('/admin/css/style.css') }}"
  >
  <link
    rel="stylesheet"
    href="{{ asset('/admin/css/skin_color.css') }}"
  >
</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
  <div class="wrapper">
    <x-admin.header />
    <x-admin.side-bar />
    <div class="content-wrapper">
      <div class="container-full">
        <!-- Main content -->
        <section class="content">
          <div class="row">{{ $slot }}</div>
        </section>
      </div>
    </div>
    <x-admin.footer />
  </div>
  <script src="{{ asset('/admin/js/vendors.min.js') }}"></script>
  <script src="{{ asset('/assets/icons/feather-icons/feather.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor_components/easypiechart/dist/jquery.easypiechart.js') }}"></script>
  <script src="{{ asset('/assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
  <script src="{{ asset('/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
  <!-- Sunny Admin App -->
  <script src="{{ asset('/admin/js/template.js') }}"></script>
  <script src="{{ asset('/admin/js/pages/dashboard.js') }}"></script>
</body>

</html>
