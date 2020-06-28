<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $table = "follows";
    protected $primaryKey="id";
    protected $fillable=[
        'user_id','author_id',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function user1(){
        return $this->belongsTo(User::class,'author_id');
    }
    public function posts(){
        return $this-> hasMany(Post::class, 'userId','author_id');
    }
    public function notifications(){
        return $this-> hasMany(Notification::class,'follow_id','author_id');
    }
  

 
    

}
