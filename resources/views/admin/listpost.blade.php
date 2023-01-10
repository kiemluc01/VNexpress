@extends("admin.post")
@section("listpost")
<div class="card shadow mb-4">
      <div class="card-header py-3" style="display: flex; justify-content: space-between;">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách bài báo</h6>
            <a href="/admin/post/create"class="btn btn-primary">Thêm bài báo</a>
      </div>
      <div class="row-4" style="margin:0 auto; width: 900px; display: flex; flex-wrap: wrap;">
            @foreach($posts as $post)
            <div class="card" style="width: 31%;height: 400px; margin:10px; position: relative;">
                  <img style="height: 180px" src="{{$post->rootImage}}" class="card-img-top" alt="...">
                  <div class="card-body">
                        <h5 class="card-title">{{$post->name}}</h5>
                        <p class="card-text"><?php
                                                echo substr($post->shortDescription, 0, 100)
                                                ?> <a href="/admin/post/edit/{{$post->id}}" style="color: blue; text-decoration: none;">...Xem thêm</a></p>
                        <a href="/admin/post/edit/{{$post->id}}" style="position: absolute; width:100px; bottom:10px;left:10px" class="btn btn-primary">Chỉnh sửa</a>
                        <a href="/admin/post/delete/{{$post->id}}" style="position: absolute;width:100px; bottom:10px;right:10px" class="btn btn-danger">Xóa bài</a>
                  </div>
            </div>
            @endforeach
      </div>
</div>
@endsection