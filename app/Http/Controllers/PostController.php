<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use App\Models\detail_post;
use App\Models\image;
use App\Http\Resources\PostResource;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\CommentController;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post_new = post::orderBy('create_at','asc')->first();
        $view_posts = post::orderBy('view','desc')->where('id','!=',$post_new->id)->limit(5)->get();
        return view('non-static-layout.home',[
            'post_new' => $post_new->toArray(),
            'view_posts' => $view_posts
        ]);
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
        $post = new post;
        $post->name = $request->name;
        $post->rootImage = $request->rootImage;
        $post->shortDescription = $request->shortDescription;
        $post->category_id = $request->category_id;
        $post->save();
        $cookie = new CookieController();
        return redirect($cookie->get('url'))->with('message', 'thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = post::findOrFail($id);
        $detail = detail_post::orderBy('id','desc')->where('post_id',$id)->first();
        $images = image::query()->where('post_id',$id)->get();
        $comment = new CommentController();
        $comments = $comment->listing($post->id);
        return view('non-static-layout.detail', [
            'post' => $post->toArray(),
            'detail' => $detail->toArray(),
            'id' =>$id,
            'images' => $images->toArray(),
            'comments' => $comments
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {  
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post = post::find($id);
        $post->name = $request->name;
        $post->rootImage = $request->rootImage;
        $post->shortDescription = $request->shortDescription;
        $post->category_id = $request->category_id;
        $post->save();
        $cookie = new CookieController();
        return redirect($cookie->get('url'))->with('message', 'update thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        post::find($id)->delete();
        $cookie = new CookieController();
        return redirect($cookie->get('url'))->with('message', 'xóa thành công');
    }

    public static function getpost($cat)
    {
        $catCTL = new CategoryController();
        $cat = $catCTL->getID($cat);
        $post = post::query()->where('category_id',$cat)->limit(2)->get();
        $post = $post->toArray();
        return $post;
    }

    public static function DomesticPost()
    {
        $posts = post::orderBy('create_at', 'asc')->where('domestic', true)->limit(5)->get();
        return $posts->toArray();
    }

    public static function view($id)
    {
        $post = post::find($id);
        $post->view= $post->view + 1;
        $post->save();
    }
}
