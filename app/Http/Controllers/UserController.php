<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function login(Request $request){
        $link = "/";
        $Cookie = new CookieController();
        if($Cookie->check('url'))
            $link = $Cookie->get('url'); //return link before login
        $username = $request->input('username');
        $password = $request->input('password');
        if(User::query()->where('username', $username)->where('password', $password)->exists())
        {
            $user = User::query()->where('username', $username)->where('password', $password)->first();
            if($Cookie->setUser($user->id))
            {
                $Cookie->set('last_user', $username);
                $Cookie->delete('password');
                if($request->has('remember'))
                {
                    $Cookie->set('password', $password);
                }
                return redirect($link)->with('success','đăng nhập thành công');
            }
        }
        return redirect('/login')->with('login fail','sai tài khoản hoặc mật khẩu');
    }

    public function register(Request $request)
    {
        if(User::query()->where('username',$request->input('username'))->exists())//check user 
            return redirect('register')->with('fail','username đã tồn tại');
        $username = $request->input('username');
        $first_name = $request->input('first_name');
        $cf_password = $request->input('cf_password');
        $password = $request->input('password');
        if($password == $cf_password)
        {
            $user = new User();
            $user->first_name = $first_name;
            $user->username = $username;
            $user->password = $password;
            $user->save();
            if($request->has('remember'))
                return redirect('/login')->with('message','đăng kí thành công')->with('username',$username)->with('password', $password);
            return redirect('/login')->with('message','đăng kí thành công');
        }
        return redirect('register')->with('fail','mật khẩu không giống nhau');

    }

    public function logout()
    {
        $Cookie = new CookieController();
        $Cookie->deleteUser();//logout => delete cookie 
        return redirect('/login');
    }

    public static function getName($id)
    {
        $user = User::query()->where('id',$id)->first();
        if($user->first_name !== null || $user->last_name !== null)
            return $user->last_name.' '.$user->first_name;
        return $user->username;
    }

    public static function checkLogin()
    {
        $cookie = new CookieController();
        if($cookie->check('user'))
            if($cookie->check('url'))
                return redirect($cookie->get('url'))->with('message'.'bạn đã đăng nhập');
            return redirect('/')->with('message'.'bạn đã đăng nhập');
    }

    public static function rootImage($id)
    {
        $user = User::query()->where('id', $id)->first();
        return $user->rootImage;
    }
}
