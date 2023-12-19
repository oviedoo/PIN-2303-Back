<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use SoftDeletes;
    protected $primaryKey='id'; 
    protected $fillable=[
        'message',
        'PersonID',
    ];
}
