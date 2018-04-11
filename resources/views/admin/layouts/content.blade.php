@include('admin.layouts.header')
@include('admin.layouts.sidebar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  
  <!-- Main content -->
  <section class="content container-fluid">

  @yield('content_admin')

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@include('admin.layouts.footer')
