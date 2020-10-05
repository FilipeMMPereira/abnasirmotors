<!DOCTYPE html>
<html>
<head>
    @include('layouts.admin.partials.head')
    @stack('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @if(Request::is('admin*'))
    @include('layouts.admin.partials.navbar')
  @endif
   
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @if(Request::is('admin*'))
    @include('layouts.admin.partials.sidebar')
  @endif
  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @if(Request::is('admin*'))
      @include('layouts.admin.partials.header')
    @endif
    
    <!-- /.content-header -->

    <!-- Main content -->

        <!-- Small boxes (Stat box) -->
      @yield('content')
        <!-- /.row (main row) -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @if(Request::is('admin*'))
    @include('layouts.admin.partials.footer')
  @endif

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<!-- jQuery -->
@include('layouts.admin.partials.jquery')

@stack('script')
</body>
</html>
