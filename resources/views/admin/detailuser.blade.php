@extends("admin.user")
@section("detail")
<div class="card" style="width: 18rem;">
      <div class="card-body">
            <h5 class="card-title">{{ $user->id }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $user->first_name }} {{ $user->last_name }}</h6>
            <p class="card-text">Username: {{ $user->username}}</p>
            <a href="/admin/users" class="card-link">Quay lại</a> 
      </div>
</div>
@endsection