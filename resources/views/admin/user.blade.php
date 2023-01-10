
@extends("layouts.master")
@section("users")
<div id="content">
      <!-- Begin Page Content -->
      <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Quản lý người dùng</h1>
        
            <!-- DataTales Example -->
            @yield("listuser")
            @yield("detail")
            @yield("edit")
            @yield("create")

      </div>
      <!-- /.container-fluid -->

</div>
@endsection