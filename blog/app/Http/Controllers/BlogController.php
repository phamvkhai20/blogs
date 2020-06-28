<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Http\Requests\Post\PostRequest;
use App\Models\Notification;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
class BlogController extends Controller
{
    public function show(){
        $posts=Post::with(['category','user'])->get();
        return view('k2k-admin.posts.show',['posts'=>$posts]);
    }
    public function create(){
        $categories=Category::all();
        return view('k2k-admin.posts.create',['categories'=>$categories]);
    }
    public function store(PostRequest $req){
        $datas=request()->all();
        $param= \Arr::except($datas,['_token','title','title2','images','Category_Id','content',]);
        
        $param['follow_id']=Auth::user()->id;
        Notification::create($param);

        $data=request()->all();
        $params= \Arr::except($data,['_token','classify','follow_id']);
        $params['images']=$req->file('images')->store('public/images');
        $params['is_comment']="true";
        Post::create($params);
        request()->flashOnly(['title']);
        request()->flashOnly(['title2']);
        request()->flashOnly(['content']);
         // $data=request()->all();
        // $params= \Arr::except($data,['_token',]);
        // Post::create($params);
        return redirect()->route('k2k-admin.posts.show');
    }
    public function edit($id){
        $categories=Category::with(['user','posts'])->get();
        $post= Post::where('id',$id)->with('category')->get();
        return view('k2k-admin.posts.edit',['categories'=>$categories,'post'=>$post[0],]);
    }
    public function update(PostRequest $req){
        $id=request()->get('id');
        $post= Post::find($id);
        $params=[];
        $params['title']=request()->get('title');
        $params['title2']=request()->get('title2');
        $params['userId']=request()->get('userId');
        $params['Category_Id']=request()->get('Category_Id');
        if(!empty( $req->file('images')->store('public/images'))){
        $hg= $req->file('images')->store('public/images');
        $params['images'] =$hg;
        };
        if(!empty(request()->get('content'))){
            $params['content'] = request()->get('content');
        };
        $post->update($params);
        return redirect()->route('k2k-admin.posts.show');
        }
    public function destroy(Post $post){
        $post->delete();

        return redirect()->route('k2k-admin.posts.show');
    }
}
