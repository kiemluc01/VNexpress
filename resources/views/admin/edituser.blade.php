@extends("admin.user")
@section('edit')
<div class="col-7">
      <p><a class="btn btn-primary" href="/admin/users">Về danh sách</a></p>
      <div class="col-xs-4 col-xs-offset-4">
            <center>
                  <h4>Thêm học sinh</h4>
            </center>
            <form action="/admin/users/edit/{{ $user->id}}" method="post">
                  <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}" />
                  <div class="form-group">
                        <label for="Họ">Họ</label>
                        <input type="text"  class="form-control" value="{{ $user->first_name }}" id="first_name" name="first_name" placeholder="Họ" maxlength="255" required />
                  </div>
                  <div class="form-group">
                        <label for="Tên">Tên</label>
                        <input type="text" class="form-control" value="{{ $user->last_name }}" id="last_name" name="last_name" placeholder="Tên" maxlength="255" required />
                  </div>
                  <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" class="form-control" value="{{ $user->username }}" id="username" name="username" placeholder="Username" maxlength="255" required />
                  </div>
                  <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="text" class="form-control" value="{{ $user->password }}" id="password" name="password" placeholder="Mật khẩu" maxlength="255" required />
                  </div>
                  <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="text" class="form-control" value="{{ $user->email }}" id="email" name="email" placeholder="Email" maxlength="255" required />
                  </div>
                  <div class="form-group">
                        <label for="Số điện thoại">Số điện thoại</label>
                        <input type="text" class="form-control" value="{{ $user->sdt }}" id="sdt" name="sdt" placeholder="Số điện thoại" maxlength="255" required />
                  </div>
                  <center><button type="submit" class="btn btn-primary">Sửa</button></center>
            </form>
      </div>
</div> 
@endsection