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
<section class="mt-5">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form method="post">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                <p class="lead fw-normal mb-0 me-3 mr-5">Đăng ký với</p>
                <button type="button" class="btn btn-primaryy btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
                </button>

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
            <div class="form-outline mb-4">
                <input type="text" class="w-100 px-3 py-2 clm" placeholder="Nhập tên" name="first_name">
                
                </div>
                <div class="form-outline mb-4">
                <input type="text" class="w-100 px-3 py-2 clm" placeholder="Nhập username" name='username'>
                
                </div>
                
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="password" class="w-100 px-3 py-2 clm" placeholder="Nhập mật khẩu" name="password">
                
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
                <input type="password" class="w-100 px-3 py-2 clm" placeholder="Nhập lại mật khẩu" name="cf_password">
                
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0 d-flex align-items-center">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" name="remember"/>
                <label class="form-check-label" for="form2Example3">
                    Lưu mật khẩu
                </label>
                </div>
                <input type="hidden" name="_token"  value="<?php echo csrf_token(); ?>">
                <a href="#!" class="text-body">Quên mật khẩu</a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
                <input type="submit" class="btn btn-primaryym btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Đăng ký"/>
                <p class="small fw-bold mt-2 pt-1 mb-0">Bạn đã có tài khoản <a href="/login"
                    class="link-danger" style="color: red;">Đăng nhập</a></p>
            </div>

            </form>
        </div>
        </div>
    </div>
</section>
@endsection