<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Follow;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\RegesterRequest;

class UserController extends Controller
{
    

    public function index(){
        
    $users=User::with(['contact','posts'])->get();
    return view('k2k-admin.users.show',['users'=>$users]);
    }

    public function create(){
        return view('k2k-admin.users.create');
    }

    public function store(RegesterRequest $request){
        $data=request()->all();
        request()->flashOnly('password');
        request()->flashOnly('cf_password');
        request()->flashOnly('name');
        request()->flashOnly('email');
        $params= \Arr::except($data,['_token','cf_password']);
        $params['password']=bcrypt($params['password']);
        User::create($params);
        return redirect()->route('k2k-admin.users.show');
    }

    public function destroy(User $user){
    $comment= Comment::where('user_id',$user->id)->delete();
    $fling= Follow::where('user_id',$user->id)->delete();
    $fler= Follow::where('author_id',$user->id)->delete();
    // dd($comment,$fler,$fling);
    $post= Post::where('user_id',$user->id)->delete();
    $user->delete();
    return redirect()->route('k2k-admin.users.show');
    }

    public function edit($id){
        $user= User::find($id);
    return view('k2k-admin.users.edit',['user'=>$user,]);
    }

    public function update($id){

    $user= User::find($id);
    $params=[];
    $params['name']=request()->get('name');
    $params['email']=request()->get('email');
    $params['status']=request()->get('status');
    $params['role']=request()->get('role');

    if(!empty(request()->get('password'))){
            $params['password'] = request()->get('password');
        };
    $user->update($params);
    return redirect()->route('k2k-admin.users.show');
    }
}