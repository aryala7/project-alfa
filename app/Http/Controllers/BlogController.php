<?php

namespace App\Http\Controllers;

use App\Blog;

use App\File;
use Exception;
use Illuminate\Http\Request;
use Throwable;


class BlogController extends Controller
{
    public function index(){
        return view('blog.list');
    }
    public function create(){
        return view('panel.blog_new');
    }
    public function save(Request $request){
        try{
            if($request->file()) {

                $fileName = time().'_'.$request->file_id->getClientOriginalName();
                $file_type = $request->file_id->getClientOriginalExtension();
                $filePath = $request->file('file_id')->storeAs('uploads', $fileName, 'public');
                
                $file = File::create([
                    'name'=>time().'_'.$request->file_id->getClientOriginalName(),
                    'address'=>'/storage/' . $filePath,
                    'type'=>$file_type,
                    'size'=>$request->file_id->getSize()
                ]);
            $request['blog_pic'] = $file->id;
            }
            Blog::create([
                'title'=>$request->input('title'),
                'slug'=>$request->input('slug'),
                'file_id'=>$request->input('blog_pic'),
                'content'=>$request->input('content')
            ]);
            flash('you made it bro!')->success();
            return back();
        }catch(Exception $exception){
            flash('something is wrong pal!')->error();
            return back();
        }
        
        

    }
    public function singleBlog($id){
        $blog = Blog::where('id',$id)->first();
    
        return view('single_blog')->with([
            'blog'=>$blog
        ]);
    }
    public function edit($id){

    }
    public function update($id){

    }
    //
}
