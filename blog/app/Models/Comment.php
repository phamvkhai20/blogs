<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    protected $primaryKey="id";
    protected $fillable=[
        'user_id','post_id','content','status','is_report'
    ];
    public function post(){
        return $this->belongsTo(Post::class,'post_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
