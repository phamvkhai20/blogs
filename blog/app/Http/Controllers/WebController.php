<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Follow;
use App\Models\User;
use App\Models\Comment;
use Auth;
use App\Http\Requests\Post\PostRequest;
use App\Models\Post;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class WebController extends Controller
{
    public function index(){
        $posts = Post::with(['category','user','comments'])->orderByRaw('id desc')->paginate(10);
        $categories=Category::with(['user','posts'])->get();
        return view('website.one-page.index',['posts'=>$posts,'categories'=>$categories,]);  
    }

    public function danhmuc($id){
        $posts = Post::where('Category_Id',$id)->orderByRaw('id desc')->with(['category','user','comments'])->paginate(10);
        $categories=Category::with(['user','posts'])->get();
        $category=Category::where('id',$id)->get();
        return view('website.one-page.category',['categories'=>$categories,'posts'=>$posts,'category'=>$category]);  
    }
    public function notification($id){
        // $notifications=Notification::where('follow_id',$id)->with(['follow','user','post'])->get();
        // return view('website.one-page.notification',['notifications'=>$notifications,]);  
       if( Auth::User()->id == $id){
       }else{
           dd('nodata');
       }
       $posts=Post::with('user')->get();
        $follows=Follow::where('user_id',$id)->with('notifications','user','posts')->orderByRaw('created_at ASC')
        ->get();
               return view('website.one-page.notification',['follows'=>$follows,'posts'=>$posts]);  

    }
    public function single($id){
        $categories=Category::with(['user','posts'])->get();
        $comments= Comment::where('post_id',$id)->with(['post','user'])->get();
        $posts= Post::where('id',$id)->with(['category'])->get();
        if(isset(Auth::user()->id)){
            $follows = DB::table('follows')->where([
                ['author_id', '=',  $posts[0]->user->id],
                ['user_id', '=', Auth::user()->id],
            ])->get();
        }else{
            $follows="";
        }
        $postsome=Post::where('Category_Id',$posts[0]->Category_Id)->with('user','comments')->limit(3)->get();
        $session=session()->put('id_post',$id);
        return view('website.one-page.single',['posts'=>$posts[0],'categories'=>$categories,'comments'=>$comments,'follows'=>$follows,'postsome'=>$postsome]); 
    }
    public function deleteComment(Comment $comment){
        $comment->delete();
        return redirect()->route('website.single', ['id' => session('id_post')]);
    }
    public function isComment($id){
        $post = Post::where('id',$id)->get();
        $params=[];
        if($post[0]->is_comment=='true'){
            $params['is_comment']='false';

        }else{
            $params['is_comment']='true';
        }
        $post[0]->update($params);
        return redirect()->route('website.single', ['id' => session('id_post')]);
    }

    public function vietbai(){
        if(isset(Auth::user()->id)){

            $users= User::where('id',Auth::user()->id)->with(['follows','posts','contact'])->get();
            $categories=Category::all();
            $dangtheodoi= Follow::where('user_id', Auth::user()->id)->with('user1')->get();
            $dangtheodoiShow= Follow::where('user_id', Auth::user()->id)->with('user1')->get();
            $duoctheodoi= Follow::where('author_id', Auth::user()->id)->get();
            $posts= Post::where('userId', Auth::user()->id)->with(['category','user','comments'])->get();
            return view('website.profile.writepost',['users'=>$users[0],'posts'=>$posts,'dangtheodoi'=>$dangtheodoi,'duoctheodoi'=>$duoctheodoi,'dangtheodoiShow'=>$dangtheodoiShow,'categories'=>$categories
            ]);
        }
    }

    public function addpost(PostRequest $req){
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
        return redirect()->route('website.profile.home',['id'=>Auth::user()->email,]);
    }
 
}