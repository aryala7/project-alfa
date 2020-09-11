<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Contact;
use App\Experinces;
use App\File;
use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Throw_;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function MainPage(){
        $blogs = Blog::all();
        $resume = Experinces::all();
        return view('index')->with([
            'me'=>User::find(1),
            'resume_items'=>$resume,
            'blogs'=>$blogs->take(3)
        ]);
    }
    public function PersonalInfo(){
        return view('panel.personal_information');
    }
    public function inbox(){
        return view('panel.inbox')->with([
            'messages'=>Contact::all()
        ]);
    }
    public function send(Request $request){
        $request->validate([
            'email'=>'email',
            // 'cellphone'=>'digits:11',
            'message'=>'required|max:120'
        ]);
        Contact::create($request->only([
            'name',
            'email',
            'cellphone',
            'message'
        ]));
        if($request->ajax()){
            return response()->json(['message'=>'پیام شما با موفقیت ارسال شد']);
        }
        $message = 'your masseage has been successfully sent';
        flash($message)->success();
        return back();
    }
    public function updatePersonalInfo(Request $request){

    
        if($request->file()) {

            $fileName = time().'_'.$request->profile_avatar->getClientOriginalName();
            $file_type = $request->profile_avatar->getClientOriginalExtension();
            $filePath = $request->file('profile_avatar')->storeAs('uploads', $fileName, 'public');
            
            $file = File::create([
                'name'=>time().'_'.$request->profile_avatar->getClientOriginalName(),
                'address'=>'/storage/' . $filePath,
                'type'=>$file_type,
                'size'=>$request->profile_avatar->getSize()
            ]);
        $request['file_id'] = $file->id;
        }
        
        $me = Auth::user();
    
        $me->update($request->only([
            'file_id',
            'name',
            'email',
            'description',
            'cellphone'
        ]));
        flash('cool bro!')->success();
        return back();
    }

    public function resume(){
        return view('panel.account_information');
    }
    public function saveResume(Request $request){
        try{
            Experinces::create($request->only([
                'title',
                'description',
                'url',
                'start',
                'end'
            ]));
            flash('awsome bro!')->success();
            return back();
        }catch(Exception $exception){
            flash('you fucked bro!')->error();
            return back();
        }
       
    }
}
