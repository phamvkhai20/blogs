<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;

class CommentController extends Controller
{
    public function comment(){
        $data=request()->all();
        $params= \Arr::except($data,['_token']);
        Comment::create($params);
        $id_post=session('id_post');
        return redirect()->route('website.single', ['id' => $id_post]);
    }



    public function show(){
        $comments=Comment::with('post','user')->get();
        return view('k2k-admin.comments.show',['comments'=>$comments]);
    }
    public function report(){
        $comments=Comment::where('is_report','1')->with('post','user')->get();
        return view('k2k-admin.comments.report',['comments'=>$comments]);
    }
}
