<?php

namespace App\Models;

use App\Models\Contact;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable; 

    protected $table='users';

    protected $primaryKey="id";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role','status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function contact(){
        return $this-> hasOne(Contact::class,'user_id','id');
    }
    
    public function categories(){
        return $this-> hasMany(Category::class,'user_id','id');
    }

    public function posts(){
        return $this-> hasMany(Post::class, 'userId','id');
    }
    public function notifications(){
        return $this-> hasMany(Notification::class, 'follow_id','id');
    }
    public function follows(){
        return $this-> hasMany(Follow::class,'user_id','id');
    }
    public function follows1(){
        return $this-> hasMany(Follow::class,'author_id','id');
    }
}
