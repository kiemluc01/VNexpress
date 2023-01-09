@extends('.layout.main-layout')
@section('content')

@if(App\Http\Controllers\CookieController::checklayout('user'))
    @php  
        $link = '/';
    @endphp
    @if(App\Http\Controllers\CookieController::checklayout('url'))
        @php  
            $link = App\Http\Controllers\CookieController::get('url');
        @endphp
    @endif
    <script>window.location = "{{$link}}";</script>
@endif
@php
    $last_user = '';
    $password = '';
    $checked ='';
@endphp
@if(App\Http\Controllers\CookieController::checklayout('last_user'))
    @php
        $last_user = App\Http\Controllers\CookieController::get('last_user');
    @endphp
    @if(App\Http\Controllers\CookieController::checklayout('password'))
        @php   
            $password = App\Http\Controllers\CookieController::get('password');
            $checked = 'checked';
        @endphp
    @endif
@endif
@if(session('username') && session('password'))
    @php  
        $last_user = session('username');
        $password = session('password');
    @endphp
@endif
<section class="mt-5">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form method="post" action="login">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                <p class="lead fw-normal mb-0 me-3 mr-5">Sign in with</p>
                <a href="{{url('/getInfor/facebook')}}" class="btn btn-primaryy btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <button type="button" class="btn btn-primaryy btn-floating mx-1">
                <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-primaryy btn-floating mx-1">
                <i class="fab fa-linkedin-in"></i>
                </button>
            </div>

            <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0">Or</p>
            </div>
            @if(session('message'))
            <div class="registed" style="width:100%; background-color:#c2ffd1; border-radius: 5px/5px;">
                <p class="text-center" style="line-height: 40px; font-size: 15px; font-weight:bold; color:rgb(0, 139, 53);">{{session('message')}}</p>
            </div><br>
            @elseif(session('login fail'))
            <div class="registed" style="width:100%; background-color:rgb(255, 211, 211); border-radius: 5px/5px;">
                <p class="text-center" style="line-height: 40px; font-size: 15px; font-weight:bold; color:rgb(133, 0, 0);">{{session('login fail')}}</p>
            </div><br>
            @endif
                <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" class="w-100 px-3 py-2 clm" value='{{$last_user}}' placeholder="Nhập email" name="username" id="username">
                
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
                <input type="password" id="password" value='{{$password}}' name="password" class="w-100 px-3 py-2 clm" placeholder="Nhập mật khẩu">
                
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0 d-flex align-items-center">
                <input class="form-check-input me-2" type="checkbox" name="remember" value="" id="form2Example3" {{$checked}}/>
                <label class="form-check-label" for="form2Example3">
                    Remember me
                </label>

                </div>
                <input type="hidden" name="_token"  value="<?php echo csrf_token(); ?>">
                <a href="#!" class="text-body">Quên mật khẩu</a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
                <input type="submit" class="btn btn-primaryym btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Đăng nhập"/>
                <p class="small fw-bold mt-2 pt-1 mb-0">Bạn chưa có tài khoản? <a href="/register"
                    class="link-danger" style="color: red;">Đăng ký</a></p>
            </div>
            </form>
        </div>
        </div>
    </div>

</section>
@endsection