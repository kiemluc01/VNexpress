<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->paginate(15);
        return view("admin.listuser", ['users' => $users]);
    }

    public function show(Request $request, $id)
    {
        $user = User::find($id);
        return view("admin.detailuser", ['user' => $user]);
    }

    public function create()
    {
        return view("admin.createuser");
    }

    public function store(Request $request)
    {
        $allRequest  = $request->all();
        $first_name  = $allRequest['first_name'];
        $last_name = $allRequest['last_name'];
        $username = $allRequest['username'];
        $email = $allRequest['email'];
        $password = $allRequest['password'];
        $sdt = $allRequest['sdt'];
        $ngaysinh = null;
        $is_admin = 0;
        $is_active = 1;

        //Gán giá trị vào array
        $dataInsertToDatabase = array(
            'first_name'  => $first_name,
            'last_name'  => $last_name,
            'username'  => $username,
            'password'  => $password,
            'email'  => $email,
            'is_active' => $is_active,
            'sdt' => $sdt,
            'is_admin' => $is_admin,
            'ngaysinh' => $ngaysinh,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        );

        $insertData = DB::table('users')->insert($dataInsertToDatabase);
        return redirect('/admin/users');
    }

    public function edit($id)
    {
        $user =  User::find($id); 
        return view('admin.edituser', ['user' => $user]);
    }
    public function update(Request $request)
    {
        $updateData = DB::table('users')->where('id', $request->id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password,
            'sdt' => $request->sdt, 
            'username' => $request->username,
            
            'updated_at' => date('Y-m-d H:i:s')
        ]);
         
        //Thực hiện chuyển trang
        return redirect('/admin/users');
    }
}
