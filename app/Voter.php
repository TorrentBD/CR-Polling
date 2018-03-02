<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    protected $fillable = ['voter_id','name','password','year','session','status'
    ];

}
