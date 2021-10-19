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
  <title>Sunny Admin - Dashboard</title>
  <link
    rel="icon"
    href="{{ asset('/admin/images/favicon.ico') }}"
  >
  <link
    rel="stylesheet"
    href="{{ asset('/admin/css/vendors_css.css') }}"
  >
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
        <section class="content">
          {{ $slot }}
        </section>
      </div>
    </div>
    <x-admin.footer />
    <x-toastr />
  </div>
  <script src="{{ asset('/admin/js/vendors.min.js') }}"></script>
  <script src="{{ asset('/admin/icons/feather-icons/feather.min.js') }}"></script>
  <script src="{{ asset('/admin/js/template.js') }}"></script>
  <script src="{{ asset('/admin/js/datatable.js') }}"></script>
  <script src="{{ asset('/admin/js/pages/data-table.js') }}"></script>
</body>

</html>
