<?php

namespace App\Http\Controllers\admin;

use App\Mail\Sendmail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\notification;

class PostController extends Controller
{
    public function index()
    {
        $posts = post::all();
        return view("admin.listpost", compact('posts'));
        
    }

    public function show(Request $request, $id)
    {
        $user = post::find($id);
        return view("admin.detailuser", ['user' => $user]);
    }

    public function create()
    {
        $category = category::all();
        return view("admin.createpost", ["category"=>$category]);
    }

    public function store(Request $request)
    {
        $allRequest  = $request->all();
        $name  = $allRequest['name'];
        $rootImage = $allRequest['rootImage'];
        $category = $allRequest['category_id'];
        $shortDescription = $allRequest['shortDescription']; 
        $domestic = 1;
        $view = 0;

        //Gán giá trị vào array
        $dataInsertToDatabase = array(
            'name'  => $name,
            'rootImage'  => $rootImage,
            'category_id'  => $category, 
            'shortDescription'  => $shortDescription,
            'domestic' => $domestic,
            'view' => $view, 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        );
        
        $insertData = DB::table('post')->insert($dataInsertToDatabase);
        $users = User::query()->where('id','!=', null)->get();
        $posts = post::orderBy('id', 'desc')->first();
        foreach($users as $user){
            $not = new notification();
            $not->title = "đã có bài viết mới";
            $not->user_id = $user->id;
            $not->post_id = $posts->id;
            $not->save();
        }
        
        $details = [
            'title' => 'Thông Báo Về Tin Mới Trong TIN TỨC EXPRESS',
            'body' => 'Đã có thông báo mới trong bảng tin, xin mời bạn vào xem!!!',
            'url' => request()->getHost()
        ];
        $mail_to = User::query()->where('email','!=',null)->get();
        foreach ($mail_to as $mail) {
            Mail::to(($mail->email))->send(new Sendmail($details));
        }
        return redirect('/admin/post');
    }

    public function edit($id)
    {
        $post =  post::find($id); 
        $category =  category::all(); 
        return view('admin.editpost', ['post' => $post], ['category' => $category]);
    }
    public function update(Request $request)
    {
        $updateData = DB::table('post')->where('id', $request->id)->update([
            'name' => $request->name,
            'rootImage' => $request->rootImage,
            'category_id' => $request->category_id,
            'shortDescription' => $request->shortDescription,
            'domestic' => 1,
            'view' => 0,
            
            'update_at' => date('Y-m-d H:i:s')
        ]);
         
        //Thực hiện chuyển trang
        return redirect('/admin/post');
    }

    public function delete($id)
    {
        $post = post::findOrFail($id);

        $post->delete();
        return redirect('admin/post');
    }
}
