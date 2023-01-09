<?php

namespace App\Http\Controllers;

use App\Models\like;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CookieController;
use Illuminate\Http\Request;

class LikeController extends Controller
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
        $cookie = new CookieController();
        $like = new like();
        $like->cmt_id = $request->idcmt;
        $like->user_id = $cookie->get('user');
        $like->save();
        return redirect($cookie->get('url'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\like  $like
     * @return \Illuminate\Http\Response
     */
    public function show(like $like)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\like  $like
     * @return \Illuminate\Http\Response
     */
    public function edit(like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\like  $like
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\like  $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $cookie = new CookieController();
        $like = like::query()->where('cmt_id', $request->idcmt)->where('user_id', $cookie->get('user'))->first();
        $like->delete();
        return redirect($cookie->get('url').'#like'.$request->idcmt);
    }

    public static function Like($idcmt)
    {
        if(like::query()->where('cmt_id', $idcmt)->exists())
        {
            $like = like::query()->where('cmt_id', $idcmt)->get();
            return count($like);
        }
        
        return 0;
    }

    public static function check($user)
    {
        if(like::query()->where('user_id',$user)->exists())
            return true;
        return false;
    }
}
