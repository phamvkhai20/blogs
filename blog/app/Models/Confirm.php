<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Confirm extends Model
{
    protected $table = "confirm";
    protected $primaryKey="id";
    protected $fillable=[
        'user_id','notification_id','confirm'
    ];
}
