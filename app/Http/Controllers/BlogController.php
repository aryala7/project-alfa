<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('blog.list');
    }
    public function create(){
        return view('panel.blog_new');
    }
    public function save(Request $request){
        Blog::create([
            'title'=>$request->input('title'),
            'slug'=>$request->input('slug'),
            'file_id'=>1,
            'description'=>$request->input('description')
        ]);

    }
    public function edit($id){

    }
    public function update($id){

    }
    //
}
