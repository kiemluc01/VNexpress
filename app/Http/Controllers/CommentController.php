<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\CookieController;

class CommentController extends Controller
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
    public function store(Request $request,$id)
    {
        //
        $comment = new comment();
        $comment->post_id = $id;
        if(isset($request->rep_text)){
            $comment->repComment = $request->input('idcmt');
            $comment->content = $request->input('rep_text');
        }
        else
            $comment->content = $request->input('text_cmt');
        $cookie = new CookieController();
        $comment->user_id = $cookie->get('user');
        $comment->save();
        return redirect($cookie->get('url'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $comment = comment::find($request->idcmt);
        $comment->delete();
        $cookie = new CookieController();
        return redirect($cookie->get('url'));
    }

    public function listing($post)
    {
        $comment = comment::orderBy('created_at', 'desc')->where('post_id', $post)->where('repComment', null)->get();
        return $comment;
    }

    public static function getRepComment($id)
    {
        $list_rep = comment::orderBy('created_at', 'desc')->where('repComment', $id)->get();
        return $list_rep;
    }
}
