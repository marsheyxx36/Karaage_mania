<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
class PostsController extends Controller
{
    //投稿一覧表示
    public function index () 
    {   $posts = \DB::table('posts')->get();
        return view('posts.index',compact('posts'));
    }

    //投稿画面表示
    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $validate_rule =[
            'store_name'=>'required',
            'area'=> 'required',
            'address'=> 'required',
            'type'=> 'required',
            'comment'=> 'required',
            'item'=> 'required',
            'image'=> 'required',
        ];
        $post = new Post;
        $user_id = Auth::id();
        $post->store_name = $request->store_name;
        $post->user_id = $user_id;
        $post->area = $request->area;
        $post->address = $request->address;
        $post->type = $request->type;
        $post->comment = $request->comment;
        $post->item = $request->item;
        $post->image = $request->image;
        
        $this->validate($request, $validate_rule);
        if($file = $request->image){
            
               $fileName = time().'.'.$file->getClientOriginalExtension();
               $target_path = public_path('/uploads/');
               $file->move($target_path,$fileName);
                   
             }else{
               $name = "";
             }

        $post->save();

       
        return redirect('/toppage');
    }
}
