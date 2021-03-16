<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        $posts = [
            ['id' => 1, 'title' => 'Laravel', 'description' => 'This is Laravel description', 'posted_by' => 'Esraa', 'created_at' => '2021-03-13'],
            ['id' => 2, 'title' => 'PHP', 'description' => 'This is PHP description', 'posted_by' => 'Sara', 'created_at' => '2021-01-05']
        ];
        return view('posts.index',[
            'posts' => $posts
            ]);
    }

    public function show(){
        $post = ['id' => 1, 'title' => 'Laravel', 'description' => 'This is Laravel description', 'posted_by' => 'Esraa', 'created_at' => '2021-03-13'];
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        return redirect()->route('posts.index');
    }

    public function edit(){
        $post = ['id' => 1, 'title' => 'Laravel', 'description' => 'This is Laravel description', 'posted_by' => 'Esraa', 'created_at' => '2021-03-13'];
        return view('posts.edit', [
            'post' => $post
        ]);  
    }
}
