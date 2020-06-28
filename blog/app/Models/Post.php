<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "blogs";
    protected $primaryKey="id";

    protected $fillable=[
        'title','content','images','userId','Category_Id','title2','is_comment'
    ];


    public function user(){
        return $this->belongsTo(User::class,'userId');
    }
    public function notification(){
        return $this-> hasOne(Notification::class,'follow_id','id');
    }
    
    public function category(){
        return $this->belongsTo(Category::class,'Category_Id');
    }
    public function comments(){
        return $this-> hasMany(Comment::class, 'post_id','id');
    }
    public function follow(){
        return $this->belongsTo(Follow::class,'userId');
    }
    
}
