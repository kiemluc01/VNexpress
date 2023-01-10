@extends("admin.user")
@section("listuser")
<div class="card shadow mb-4">
                  <div class="card-header py-3" style="display: flex; justify-content: space-between;">
                        <h6 class="m-0 font-weight-bold text-primary">Danh sách người dùng</h6>
                        <button type="button" class="btn btn-primary">Thêm người dùng</button>
                  </div>
                  
                  <div class="card-body">
                        <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                          <tr>
                                                <th>#</th>
                                                <th>Tên</th>
                                                <th>Username</th>
                                                <th>Ngày đăng ký</th>
                                                <th></th> 
                                          </tr>
                                    </thead>
                                    <tfoot>
                                          <tr>
                                                <th>#</th>
                                                <th>Tên</th>
                                                <th>Username</th>
                                                <th>Ngày đăng ký</th>  
                                                <th></th> 

                                          </tr>
                                    </tfoot>
                                    <tbody> 
                                         @foreach($users as $user)
                                                <tr>
                                                      <td>{{ $user->id }}</td>
                                                      <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                                      <td>{{ $user->username }}</td> 
                                                      <td>{{ $user->updated_at }}</td>
                                                      <td class="col-3">
                                                            <a href="/admin/users/{{$user->id}}" class="btn btn-success">Xem</a>
                                                            <a href="/admin/users/edit/{{$user->id}}" class="btn btn-primary">Sửa</a>
                                                             
                                                      </td>
                                                </tr>
                                         @endforeach
                                    </tbody>
                              </table>
                        </div>
                  </div>
            </div>
@endsection
