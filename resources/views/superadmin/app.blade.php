<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="author" content="TEZEMBONG-DJOUTCHET HELVYNE" />
  <title>
    AMN-Super Admin
  </title>
  @include('partials.superadmin.linkCss')
</head>

<body class="g-sidenav-show  bg-gray-100">
    @include("partials.superadmin.sidebar")

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-4">
            @include('partials.superadmin.header')
            @yield('content')

            @include('partials.superadmin.footer')
        </div>
    </main>

    @include('partials.superadmin.bottombar')

    @include('partials.superadmin.linkJs')
    <script>
        $(document).ready(function(){
            $('#example').DataTable();
        });
    </script>
</body>
</html>
