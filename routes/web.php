<?php

use Illuminate\Support\Facades\Route;
use App\Mail\Sendmail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//home
Route::get('/', function () {
    return view('non-static-layout.home');
});
//detail
// Route::get('/details/{id}', function ($id) {
//     return view('non-static-layout.detail', ['id' => $id]);
// });
//login
Route::get('/login', function () {
    return view('non-static-layout.login');
});
//register
Route::get('/register', function () {
    return view('non-static-layout.register');
});
//information
Route::get('/profile', function () {
    return view('non-static-layout.profile');
});

Route::get('/send-mail', function () {
    $details = [
        'title' => 'Thông Báo Về Tin Mới Trong TIN TỨC EXPRESS',
        'body' => 'Đã có thông báo mới trong bảng tin, xin mời bạn vào xem!!!'
    ];
    $mail_to = ["kiemluc01@gmail.com","nvthuan1201@gmail.com","nguyenquocvu10a2@gmail.com","Thanghoangminh149@gmail.com","buivietthinh.qng97@gmail.com","thanhhung14072001@gmail.com"];
    foreach($mail_to as $mail){
        Mail::to(strval($mail))->send(new Sendmail($details));
    }
     
    dd("Email is Sent.");
});

//User controller
Route::controller(UserController::class)->group(function(){
    Route::post('/login', 'login');//login method
    Route::post('/register', 'register');//register method
    Route::get('logout', 'logout'); //method logout
});

Route::controller(SocialController::class)->group(function(){
    Route::get('/getInfor/{social}', 'getInfo');//login method
    Route::get('/checkInfor/{social}', 'checkInfo');//register method
});

Route::controller(PostController::class)->group(function(){
    Route::get('/','index');
    Route::get('details/{id}','show');
});
 
Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/page404', function () {
    return view('admin.page404');
});

Route::get('/admin/post', function () {
    return view('admin.post');
});

Route::controller(CommentController::class)->group(function(){
    Route::post('details/{id}/comment', 'store');
    Route::get('details/{id}/deleteComment/{idcmt}', 'destroy');
});

Route::controller(LikeController::class)->group(function(){
    Route::get('details/{id}/like/{idcmt}', 'store');
    Route::get('details/{id}/unlike/{idcmt}', 'destroy');
});
