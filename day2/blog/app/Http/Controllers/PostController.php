<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::paginate(3);

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show($post){
        $post = Post::find($post);

        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create(){
        return view('posts.create',[
            'users' => User::all()
        ]);
    }

    public function store(Request $myRequestObject){
        $data = $myRequestObject->all();
        Post::create($data);

        return redirect()->route('posts.index');
    }

    public function edit(Post $post){
        $users = User::all();

        return view('posts.edit', [
            'post' => $post,
            'users' => $users
        ]);  
    }

    public function update(Request $request,$post){
        $post=Post::findOrFail($post);
        $post->update([
            'title' => $request['title'],
            'description' =>$request['description'],
            'user_id' =>$request['user_id'],
        ]);

        return redirect()->route('posts.index');
    }

    public function run()
    {
        User::factory()->count(50)->create();
    }
    public  function destroy($post){
         Post::destroy($post);
         
         return redirect()->route('posts.index');    
     }
}
