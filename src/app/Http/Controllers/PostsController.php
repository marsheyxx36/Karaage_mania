<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
