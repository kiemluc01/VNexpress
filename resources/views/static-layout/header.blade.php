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
                <div class="search">
                    <input type="text" placeholder="Tìm kiếm" class="ip" id="search">
                    <button class="sr">
                        <i class="fa-solid fa-magnifying-glass "></i>
                    </button>
                </div>
                
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
                      <div class="theme-switch">
                        <div class="switch"></div>
                      </div>
                    </div>
                    <div class="list_tb">
                      <li class="d-flex p-1 gap10 align-items-center mb-2">
                        <div class="img-tb">
                          <img src="https://scontent.fdad1-3.fna.fbcdn.net/v/t39.30808-6/311872178_1179919565931920_215782886144448130_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=bsh8eV1wJGEAX-o83q5&_nc_ht=scontent.fdad1-3.fna&oh=00_AfBm5E_qWi3dRYSc9_gnjByAlzpKxq2UtvC9_w_KCEZBbA&oe=63A86032" alt="">
                        </div>
                        <div>
                          <p class="tt-tb"><strong>Chương</strong> đã nhắc bình luận trong gì đóaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                          <p style="color: #1876f2;">1 ngày trước</p>
                        </div>
                      </li>
                      <li class="d-flex p-1 gap10 align-items-center mb-2">
                        <div class="img-tb">
                          <img src="https://scontent.fdad1-3.fna.fbcdn.net/v/t39.30808-6/311872178_1179919565931920_215782886144448130_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=bsh8eV1wJGEAX-o83q5&_nc_ht=scontent.fdad1-3.fna&oh=00_AfBm5E_qWi3dRYSc9_gnjByAlzpKxq2UtvC9_w_KCEZBbA&oe=63A86032" alt="">
                        </div>
                        <div>
                          <p class="tt-tb"><strong>Chương</strong> đã nhắc bình luận trong gì trong ảnh của bạn thi phải </p>
                          <p style="color: #1876f2;">1 ngày trước</p>
                        </div>
                      </li>
                      <li class="d-flex p-1 gap10 align-items-center mb-2">
                        <div class="img-tb">
                          <img src="https://scontent.fdad1-3.fna.fbcdn.net/v/t39.30808-6/311872178_1179919565931920_215782886144448130_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=bsh8eV1wJGEAX-o83q5&_nc_ht=scontent.fdad1-3.fna&oh=00_AfBm5E_qWi3dRYSc9_gnjByAlzpKxq2UtvC9_w_KCEZBbA&oe=63A86032" alt="">
                        </div>
                        <div>
                          <p class="tt-tb"><strong>Chương</strong> đã nhắc bình luận trong gì trong ảnh của bạn thi phải </p>
                          <p style="color: #1876f2;">1 ngày trước</p>
                        </div>
                      </li>
                      <li class="d-flex p-1 gap10 align-items-center mb-2">
                        <div class="img-tb">
                          <img src="https://scontent.fdad1-3.fna.fbcdn.net/v/t39.30808-6/311872178_1179919565931920_215782886144448130_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=bsh8eV1wJGEAX-o83q5&_nc_ht=scontent.fdad1-3.fna&oh=00_AfBm5E_qWi3dRYSc9_gnjByAlzpKxq2UtvC9_w_KCEZBbA&oe=63A86032" alt="">
                        </div>
                        <div>
                          <p class="tt-tb"><strong>Chương</strong> đã nhắc bình luận trong gì trong ảnh của bạn thi phải </p>
                          <p style="color: #1876f2;">1 ngày trước</p>
                        </div>
                      </li>
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
                            <a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i>Tài khoản của tôi </a>
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
            <li>Thời sự</li>
            <li>Góc nhìn</li>
            <li>Thế giới</li>
            <li>Podcasts</li>
            <li>Kinh doanh</li>
            <li>Khoa học</li>
            <li>Giải trí</li>
            <li>Thể thao</li>
            <li>Pháp luật</li>
            <li>Giáo dục</li>
            <li>Đời sống</li>
            <li>Du lịch</li>
            <li>Xe </li>
        </ul>
    </div>
</div>
    <!-- End Head-->