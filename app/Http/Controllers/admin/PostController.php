<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'create_at' => date('Y-m-d H:i:s'),
            'update_at' => date('Y-m-d H:i:s'),
        );

        $insertData = DB::table('post')->insert($dataInsertToDatabase);
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
