
@extends("layouts.master")
@section("post")
<div id="content">
      <!-- Begin Page Content -->
      <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Quản lý bài báo</h1>
        
            <!-- DataTales Example -->
            @yield("listpost") 
            @yield("create") 

      </div>
      <!-- /.container-fluid -->

</div>
@endsection