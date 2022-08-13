<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostsController extends Controller
{
    //投稿一覧表示
    public function index () 
    {
        return view('posts.index');
    }

    //投稿画面表示
    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $post = new Post;
        $post->store_name = $request->store_name;
        $post->area = $request->area;
        $post->address = $request->address;
        $post->type = $request->type;
        $post->item = $request->item;
        $post->comment = $request->comment;
        $post->save();
        return redirect('/toppage');
    }
}
