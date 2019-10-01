@include('multiauth::templates.head')
  <div class="wrapper">
    @include('multiauth::templates.header')
    @include('multiauth::templates.sidebar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  @yield('content')
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
@include('multiauth::templates.footer')