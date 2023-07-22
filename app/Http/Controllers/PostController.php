<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(Post $post){
        return view('posts.index')->with(['posts'=>$post->getPaginateByLimit()]);
    }
    public function index2(Post $post){
        return view('posts.index',['posts'=>$post->get()]);
    }
    public function index3(Post $post){
        $posts=Post::get();
        return view('posts.index',compact('posts'));
    }
    public function show(Post $post){
        return view('posts.show')->with(['post'=>$post]);
    }
    public function create(){
        return view('posts.create');
    }
    public function store(Request $request,PostRequest $post){
        $input=$request['post'];
        $post->fill($input)->save();
        return redirect('/posts/'.$post->id);
    }
}
