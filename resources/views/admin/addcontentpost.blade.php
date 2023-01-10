@extends("admin.post")
@section("addcontent")
<form action="/admin/post/content/{{$post_detail->id}}" method="post">
      <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}" />
      <div class="form-group">
            <label for="tieude">Nội dung</label>
            <textarea cols="50" rows="20"class="form-control" id="content" name="content" placeholder="Tiêu đề" required >

            </textarea>
      </div>
      
      <center><button type="submit" class="btn btn-primary">Thêm nội dung</button></center>
</form>
@endsection