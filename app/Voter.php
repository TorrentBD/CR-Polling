<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Voter extends Authenticatable
{
    protected $fillable = ['voter_id','name','password','year','session','status'
    ];


    public $timestamps = false;


    protected $hidden = [
         
    ];

}
