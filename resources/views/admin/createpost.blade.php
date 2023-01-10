@extends("admin.post")
@section("create")
<div class="col-7">
      <p><a class="btn btn-primary" href="/admin/post">Về danh sách</a></p>
      <div class="col-xs-4 col-xs-offset-4">
            <center>
                  <h4>Thêm bài báo</h4>
            </center>
            <form action="/admin/post/create" method="post">
                  <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}" />
                  <div class="form-group">
                        <label for="tieude">Tiêu đề bài báo</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Tiêu đề" required />
                  </div>
                  <div class="form-group">
                        <label for="Nội dung">Nội dung</label>
                        <input type="textarea" class="form-control" id="shortDescription" name="shortDescription" placeholder="Nội dung" required />
                  </div>
                  <div class="form-group">
                        <label for="Username">Thể loại</label>
                        <select name="category_id" class="form-control" id="category_id">
                              <option value="">Lựa chọn thể loại</option>
                              @foreach($category as $cate)
                              <option value="{{$cate->id}}">{{$cate->name}}</option>
                              @endforeach
                        </select>
                  </div>
                  <div class="form-group">
                        <label for="">Đường dẫn ảnh</label>
                        <input type="text" class="form-control" id="rootImage" name="rootImage" placeholder="Đường dẫn ảnh" required />
                  </div>
                  
                  <center><button type="submit" class="btn btn-primary">Thêm bài báo</button></center>
            </form>
      </div>
</div>
@endsection