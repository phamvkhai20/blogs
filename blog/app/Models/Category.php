<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $primaryKey="id";
    protected $fillable=[
        'user_id','name_category','status'
    ];

    public function  user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function posts(){
        return $this-> hasMany(Post::class, 'Category_Id','id');
    }
}
