<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\Auth\LoginRequest;
use Auth;
use App\Http\Requests\Auth\RegesterRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function formlogin(){
            return view('Auth.formlogin');
    }
    public function NotificationActive(){
        return view('Auth.NotificationActive');
    }
    public function login(LoginRequest $request){
        $result=Auth::attempt([
            'email'=>request()->get('email'),
            'password'=>request()->get('password')
        ], request()->get('remember'));
        if($result){
            return redirect()->route('website.index');
        };
        request()->flashOnly(['email']);
        return view('Auth.formlogin',[
            'message'=>__('auth.failed'),
        ]);
        // $user= User::where('email',$req->input('email'))->get();
        // if(Crypt::decrypt($user[0]->password)==($req->input('password'))){
        //     $req->session()->put('user',$user[0]->email);
        //     return redirect()->route('website.one-page.index');
        // }
    }
    public function logout(){
        auth::logout();
        return redirect()->route('website.index');
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
        
        return redirect()->route('formlogin');
    }
    public function fromRegister(){
        return view('Auth.formRegister');
    }


}
