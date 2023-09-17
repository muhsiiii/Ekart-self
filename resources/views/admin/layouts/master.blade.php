@include('admin.layouts.header')
<!-- Sidebar Menu -->
@include('admin.layouts.sidebar')
<!-- /.sidebar-menu -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content')
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include('admin.layouts.footer')