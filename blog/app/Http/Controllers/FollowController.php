<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Follow;
use App\Models\Notification;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Auth;
class FollowController extends Controller
{
    public function follows(Request $req){
        $follows = DB::table('follows')->where([
            ['author_id', '=', $req->input('author_id')],
            ['user_id', '=', Auth::user()->id],
        ])->get();
        if(count($follows)==0){
            $data=request()->all();
            $params= \Arr::except($data,['_token',]);
            Follow::create($params);
            $id_post=session('id_post');
            return redirect()->route('website.single',['id' => $id_post]);
        }else{
            $follows = DB::table('follows')->where([
                ['author_id', '=', $req->input('author_id')],
                ['user_id', '=', Auth::user()->id],
            ])->delete();
            $id_post=session('id_post');
        return redirect()->route('website.single',['id' => $id_post]);
        }
    }
   
    public function profilefollows(Request $req){
        $follows = DB::table('follows')->where([
            ['author_id', '=', $req->input('author_id')],
            ['user_id', '=', Auth::user()->id],
        ])->get();
        if(count($follows)==0){
            $data=request()->all();
            $params= \Arr::except($data,['_token',]);
            Follow::create($params);
            $id_user=session('id_user');
            return redirect()->route('website.profile.home',['id' => $id_user]);
        }else{
            $follows = DB::table('follows')->where([
                ['author_id', '=', $req->input('author_id')],
                ['user_id', '=', Auth::user()->id],
            ])->delete();
            $id_user=session('id_user');
            
            return redirect()->route('website.profile.home',['id' => $id_user]);

        }
        
    }

   
}
