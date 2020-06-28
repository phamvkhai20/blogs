<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Contact;
use App\Models\Follow;
use Auth;
use Illuminate\Support\Facades\DB;
class ProfileController extends Controller
{
    public function home($id){
        $users= User::where('email',$id)->with(['follows','posts','contact'])->get();
        if(isset(Auth::user()->id)){
        $follows = DB::table('follows')->where([
            ['author_id', '=',  $users[0]->id],
            ['user_id', '=', Auth::user()->id],
        ])->get();
        }else{
            $follows="";
        }
        $dangtheodoi= Follow::where('user_id',$users[0]->id)->with('user1')->get();
        $dangtheodoiShow= Follow::where('user_id',$users[0]->id)->with('user1')->get();
        $duoctheodoi= Follow::where('author_id',$users[0]->id)->get();
        $posts= Post::where('userId',$users[0]->id)->with(['category','user','comments'])->get();
        $session=session()->put('id_user',$id);
        return view('website.profile.home',[
            'users'=>$users[0],'posts'=>$posts,'dangtheodoi'=>$dangtheodoi,'duoctheodoi'=>$duoctheodoi,'dangtheodoiShow'=>$dangtheodoiShow,'follows'=>$follows
        ]);

    }

    public function editProfile(){
        $id=Auth::user()->email;
        $users= User::where('email',$id)->with(['follows','posts','contact'])->get();
        $dangtheodoiShow= Follow::where('user_id',$users[0]->id)->with('user1')->get();
        return view('website.profile.editProfile',['dangtheodoiShow'=>$dangtheodoiShow,'users'=>$users[0]]);
    }
   public function saverInfo(Request $req){
        $id=Auth::user()->id;
        $email=Auth::user()->email;
        $user= User::find($id);
        $params=[];
        $params['name']=request()->get('name');
        $params['email']=request()->get('email');
        $user->update($params);
      
        $contacts= Contact::where('user_id',$id)->get();
        
        if(count($contacts)>0){
            $id_contact=$contacts[0]->id;
            $contact= Contact::find($id_contact);
            $param['phone_number']=request()->get('phone_number');
            $param['birth_day']=request()->get('birth_day');
            $param['address']=request()->get('address');
            if(!empty( $req->file('avatar')->store('public/images'))){
                $hg= $req->file('avatar')->store('public/images');
                $param['avatar'] =$hg;
            };
            $contact->update($param);
        }else{
            $data=request()->all();
            $param= \Arr::except($data,['_token','name','email']);
            $params['avatar']=$req->file('avatar')->store('public/images');
            Contact::create($param);
        }
        return redirect()->route('website.profile.home',['id'=>$email]);
        }



    
   
 
}