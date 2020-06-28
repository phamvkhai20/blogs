<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contacts";
    protected $primaryKey="id";
    protected $fillable=[
        'user_id','phone_number','avatar','address','birth_day'
    ];

    public function  user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
