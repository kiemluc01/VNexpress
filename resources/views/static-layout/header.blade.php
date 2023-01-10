<!-- start Head-->
<nav class="navbar container  navbar-expand-md navbar-light ">
    <div class="br">
        <img src="https://s1.vnecdn.net/vnexpress/restruct/i/v690/v2_2019/pc/graphics/logo.svg" class="img-fluid mr-3 " alt="">
    </div>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav">
            <span id="timer" class="nav-item nav-link"></span>
        </div>
        <div class=" d-flex align-items-center">
            <div class="mr-3 br">
                <div class="g10 mr-3">
                    <a href="" class="tl"><i class="fa-solid fa-clock  "></i></i>Mới nhất</a>
                    <a href="" class="tl"><i class="fa-solid fa-location-dot  "></i>Tin khu vực</a>
                    <a href="" class="tl">International</a>
                </div>
            </div>
            <div class="navbar-nav ml-auto br align-items-center">
                <form method="post" action="/search" class="search">
                    <input type="text" name="text" placeholder="Tìm kiếm" class="ip" id="search">
                    <input type="hidden" name="_token"  value="<?php echo csrf_token(); ?>" >
                    <button type="submit" class="sr">
                        <i class="fa-solid fa-magnifying-glass "></i>
                    </button>
                </form>
                
                @if(App\Http\Controllers\CookieController::checklayout('user'))
                @php
                  $name = App\Http\Controllers\UserController::getname(App\Http\Controllers\CookieController::get('user'));
                @endphp
                <div class="dropdown mr-2">
                    <a
                      class=" d-flex align-items-center hidden-arrow"
                      href="#"
                      id="navbarDropdownMenuAvatar"
                      role="button"
                      data-mdb-toggle="dropdown"
                      aria-expanded="false"
                      hidden
                    >
                    <i class="fa-solid fa-bell"></i>
                    </a>
                    <ul
                      class="dropdown-menu dropdown-menu-end  tb-hind "
                      aria-labelledby="navbarDropdownMenuAvatar"
                    >
                    <div class="my-3 luia px-2">
                      <p><strong>Thông báo</strong></p>
                    </div>
                    <div class="list_tb">
                      @php  
                        $nots = App\Http\Controllers\NotificationController::get(App\Http\Controllers\CookieController::get('user'));
                      @endphp
                      @foreach($nots as $not)
                        @if($not->user_id_cmt != null)
                          <li class="d-flex p-1 gap10 align-items-center mb-2">
                            <div class="img-tb">
                              <img src="{{App\Http\Controllers\UserCOntroller::rootImage($not->user_id_cmt)}}" alt="">
                            </div>
                            <div>
                              <p class="tt-tb"><strong>{{App\Http\Controllers\UserCOntroller::getName($not->user_id_cmt)}}</strong> {{$not->title}}</p>
                              <p style="color: #1876f2;">{{$not->created_at}}</p>
                            </div>
                          </li>
                        @else  
                          <li class="d-flex p-1 gap10 align-items-center mb-2">
                            <div class="img-tb">
                              <img src="/assets/image/icon/logo.png" alt="">
                            </div>
                            <div>
                              <p class="tt-tb"><strong>TIN TỨC UTE</strong> {{$not->title}}</p>
                              <p style="color: #1876f2;">{{$not->created_at}}</p>
                            </div>
                          </li>
                        @endif
                      @endforeach
                    </div>
                    </ul>
                  </div>
                <div class="dropdown">
                    <a
                        class="dropdown-toggle d-flex align-items-center hidden-arrow"
                        href="#"
                        id="navbarDropdownMenuAvatar"
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <img
                        src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                        class="rounded-circle"
                        height="25"
                        alt="Black and White Portrait of a Man"
                        loading="lazy"
                        />
                        <span>{{ $name }}</span>
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="navbarDropdownMenuAvatar"
                    >
                        <li>
                            <a class="dropdown-item" href="/profile"><i class="fa-solid fa-user"></i>Tài khoản của tôi </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/logout"><i class="fa-solid fa-right-from-bracket"></i>Đăng xuất</a>
                        </li>
                    </ul>
                </div>
                @else
                    <a href="/login" class="nav-item nav-link"><i class="fa-solid fa-user "></i>Đăng nhập</a>
                @endif

            </div>
        </div>
    </div>
</nav>
<div class="container-fluid b1 hk bb" id="header">
    <div class="d-flex justify-content-between align-items-center">
        <li><a href="/"><i class="fa-solid fa-house"></i></a></li>
        <ul class="d-flex justify-content-between align-items-center b0 py-3 head w-100 ">
            <li><a href="/search/category/{{App\Http\Controllers\CategoryController::getID('Thời sự')}}">Thời sự</a></li>
            <li><a href="/search/category/{{App\Http\Controllers\CategoryController::getID('Góc nhìn')}}">Góc nhìn</a></li>
            <li><a href="/search/category/{{App\Http\Controllers\CategoryController::getID('Thế giới')}}">Thế giới</a></li>
            <li><a href="/search/category/{{App\Http\Controllers\CategoryController::getID('Podcasts')}}">Podcasts</a></li>
            <li><a href="/search/category/{{App\Http\Controllers\CategoryController::getID('Kinh doanh')}}">Kinh doanh</a></li>
            <li><a href="/search/category/{{App\Http\Controllers\CategoryController::getID('Khoa học')}}">Khoa học</a></li>
            <li><a href="/search/category/{{App\Http\Controllers\CategoryController::getID('Giải trí')}}">Giải trí</a></li>
            <li><a href="/search/category/{{App\Http\Controllers\CategoryController::getID('Thể thao')}}">Thể thao</a></li>
            <li><a href="/search/category/{{App\Http\Controllers\CategoryController::getID('Pháp luật')}}">Pháp luật</a></li>
            <li><a href="/search/category/{{App\Http\Controllers\CategoryController::getID('giáo dục')}}">Giáo dục</a></li>
            <li><a href="/search/category/{{App\Http\Controllers\CategoryController::getID('Đời sống')}}">Đời sống</a></li>
            <li><a href="/search/category/{{App\Http\Controllers\CategoryController::getID('Du lịc')}}">Du lịch</a></li>
            <li><a href="/search/category/{{App\Http\Controllers\CategoryController::getID('Xe')}}">Xe</a></li>
        </ul>
    </div>
</div>
    <!-- End Head-->