<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = "notifications";
    protected $primaryKey="id";
    protected $fillable=[
        'follow_id','classify',
    ];
    
    public function  follow(){
        return $this->belongsTo(User::class,'follow_id');
    }
    public function  post(){
        return $this->belongsTo(Post::class,'follow_id');
    }
      public function user(){
        return $this->belongsTo(User::class,'follow_id');
    }
}
