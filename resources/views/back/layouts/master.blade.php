<!DOCTYPE html>
<html>
@include('back.layouts.head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 @include('back.layouts.header')
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
@include('back.layouts.sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    {{-- <section class="content-header">
      <h1>
        Dasbhboard
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section> --}}
@include('back.layouts.common.flash-message')
    <!-- Main content -->
@yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('back.layouts.footer')

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset('back/js/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('back/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('back/js/app.min.js')}}"></script>
@yield('script')
</body>
</html>
