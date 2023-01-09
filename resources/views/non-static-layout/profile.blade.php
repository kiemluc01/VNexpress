@extends('.layout.main-layout')
@section('content')
<div class="container_tt my-5">
<div class="flexkhung">
    <div class="col-md-3 border brsc">
        <div class="bt text-center">
            <div class="bt my-3">
                <img src="https://a1.vnecdn.net/t91866790478551940190.png?w=60&h=60&s=YOW4RRxn7dOfY6Rs6BwlbQ" class="rounded-circle mb-2 img-fluid" alt="">
                <p class="mb-2 name_myvne">luongvanchuong</p>
            </div>
            <div class="bt">
                <p class="mb-2">Tham gia từ</p>
                <p class="mb-2"> <i class="fa-solid fa-cake-candles"></i>11/12/2022</p>
                <a href="#"><i class="fa-solid fa-right-from-bracket"></i>Thoát</a>
            </div>
        </div>
        <!-- <div class="bt">
            <p>Hoạt động bình luận</p>
            <p>Tin đã lưu</p>
            <p>Tin đã xem</p>
            <p>Tài khoản của tôi</p>
            <p><i class="fa-solid fa-right-from-bracket"></i>Thoát</p>
        </div> -->
    </div>
    
    <div class="col-md-9 border brsc bln">
        <div class="">
            <div class="d-flex align-items-center justify-content-between my-2">
            <h5>Tài khoản của tôi</h5>
            <a data-toggle="modal" data-target="#exampleModalCenter" class="cn">Cập nhập</a>
            </div>
            <!-- <strong>Ảnh đại diện</strong>
        <div class=" box_upload_anh my-3">
            <form for="#" class="act_upload">
                <input type="file" class="input_file" id="act_upload" hidden>
                <i class="fa-solid fa-cloud-arrow-up upload"></i>
                <span class="txt_up">Tải lên ảnh đại diện mới</span>
            </form>
            <input type="hidden" id="myvne_avatar_input" name="myvne_avatar" value="">
        </div> -->
        </div>
        <div class=" my-3">
            <!-- <h5>Tài khoản</h5> -->
            <div class="row  ">
                <div class="col-md-3 mb-2">
                    <span>Email</span>

                </div>
                <div class="col-md-9 ">
                    <div class="d-flex justify-content-between" >
                        <p class="em">luongvanchuong963@gmail.com</p>
                        
                    </div>
                    <!-- <div class="box_edit_form mb-3 andi">
                        <div action="">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <p><strong>Đổi mail</strong></p>
                                <p class="close_edit">x</p>
                            </div>
                            <form action="">
                                <input type="text" placeholder="Nhập mail mới" class="phuk">
                                
                            </form>
                            <button class="btn btn-secondary my-3">Lưu lại</button>
                        </div>
                    </div> -->
                </div>

            </div>
            <div class="row">
                <div class="col-md-3 mb-2">
                    <span>Điện thoại</span>

                </div>
                <div class="col-md-9 ">
                    <div class="d-flex justify-content-between" >
                        <p class="em">039456782</p>
                        
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Mật khẩu</span>

                </div>
                <div class="col-md-9 ">
                    <div class="d-flex justify-content-between" >
                        <input type="password" class="px-2 " value="hiiiii">
                        
                    </div>
                    <!-- <div class="box_edit_form mb-3 andi">
                        <div action="">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <p ><strong>Đổi mật khẩu</strong></p>
                            
                            </div>
                            <form action="">
                                <input type="text" placeholder="Nhập mail mới" class="phuk mb-4">
                                <input type="password" placeholder="Nhập mail mới" class="phuk">
                                
                            </form>
                            <button class="btn btn-secondary my-3">Lưu lại</button>
                        </div>
                    </div> -->
                </div>
                
            </div>
        </div>
        <div class="">
            <h5>Thông tin cá nhân</h5>
            <div class="row">
                <div class="col-md-3 mb-2">
                    <span>Họ và tên</span>

                </div>
                <div class="col-md-9 ">
                    <div class="d-flex justify-content-between" >
                        <p class="em">Lương Chương</p>
                        
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-3 mb-2">
                    <span>Giới tính</span>

                </div>
                <div class="col-md-9 ">
                    <div class="d-flex justify-content-between" >
                        <p class="em">Khác</p>
                        
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-3 mb-2">
                    <span>Địa điểm</span>

                </div>
                <div class="col-md-9 ">
                    <div class="d-flex justify-content-between" >
                        <p class="em">Lương Chương</p>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog containerr modal-dialog-centered" role="document">
        <div class="modal-content px-4">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Tài khoản của tôi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <!-- <div class="d-flex align-items-center justify-content-between my-2">
                        <h5></h5>
                        <p data-toggle="modal" data-target="#exampleModalCenter">Cập nhập</p>
                    </div> -->
                        <strong>Ảnh đại diện</strong>
                    <div class=" box_upload_anh my-3">
                        <form for="#" class="act_upload">
                            <input type="file" class="input_file" id="act_upload" hidden>
                            <i class="fa-solid fa-cloud-arrow-up upload"></i>
                            <span class="txt_up">Tải lên ảnh đại diện mới</span>
                        </form>
                        <input type="hidden" id="myvne_avatar_input" name="myvne_avatar" value="">
                    </div>
                    </div>
                    <div class=" my-3">
                        <h5>Tài khoản</h5>
                        <div class="row align-items-center mb-3 ">
                            <div class="col-md-3 mb-2">
                                <span>Email</span>
    
                            </div>
                            <div class="col-md-9 ">
                                <div class="d-flex justify-content-between" >
                                <input type="text" value="luongvanchuong963@gmail.com" class="w-100 clm p-1">
                                    
                                </div>
                                <!-- <div class="box_edit_form mb-3 andi">
                                    <div action="">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <p><strong>Đổi mail</strong></p>
                                            <p class="close_edit">x</p>
                                        </div>
                                        <form action="">
                                            <input type="text" placeholder="Nhập mail mới" class="phuk">
                                            
                                        </form>
                                        <button class="btn btn-secondary my-3">Lưu lại</button>
                                    </div>
                                </div> -->
                            </div>
    
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-md-3 mb-2">
                                <span>Điện thoại</span>
    
                            </div>
                            <div class="col-md-9 ">
                                <div class="d-flex justify-content-between" >
                                <input type="text" value="luongvanchuong963@gmail.com" class="w-100 clm p-1">
                                    
                                </div>
                            </div>
    
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-md-3">
                                <span>Mật khẩu</span>
    
                            </div>
                            <div class="col-md-9 ">
                                <div class="d-flex justify-content-between" >
                                <input type="password" value="luongvanc" class="w-100 clm p-1">
                                
                                </div>
                                <!-- <div class="box_edit_form mb-3 andi">
                                    <div action="">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <p ><strong>Đổi mật khẩu</strong></p>
                                    
                                        </div>
                                        <form action="">
                                            <input type="text" placeholder="Nhập mail mới" class="phuk mb-4">
                                            <input type="password" placeholder="Nhập mail mới" class="phuk">
                                            
                                        </form>
                                        <button class="btn btn-secondary my-3">Lưu lại</button>
                                    </div>
                                </div> -->
                            </div>
                            
                        </div>
                    </div>
                    <div class="">
                        <h5>Thông tin cá nhân</h5>
                        <div class="row mb-3">
                            <div class="col-md-3 mb-2">
                                <span>Họ và tên</span>
    
                            </div>
                            <div class="col-md-9 ">
                                <div class="d-flex justify-content-between" >
                                <input type="text" value="lương chuwong" class="w-100 clm p-1">
                                
                                </div>
                            </div>
    
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3 mb-2">
                                <span>Giới tính</span>
    
                            </div>
                            <div class="col-md-9 ">
                                <div class="d-flex justify-content-between" >
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                                    <label class="form-check-label" for="flexRadioDefault1"> Nam  </label>
                                    </div>
                                    
                                    <!-- Default checked radio -->
                                    <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked/>
                                    <label class="form-check-label" for="flexRadioDefault2"> Nữ </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked/>
                                    <label class="form-check-label" for="flexRadioDefault2"> Khác </label>
                                    </div>
                                
                                </div>
                            </div>
    
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3 mb-2">
                                <span>Địa điểm</span>
    
                            </div>
                            <div class="col-md-9 ">
                            <div class="textare">
                                <textarea name="" placeholder="Ý kiến của bạn" class="w-100 h30 tx" id=""></textarea>
                                </div>
                            </div>
    
                        </div>
                    </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Lưu</button>
            
        </div>
        </div>
    </div>
    </div>
</div>
@endsection