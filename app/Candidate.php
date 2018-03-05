<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = ['position','student_id',
        'name','gender','session','year','photo',
    ];

    public $timestamps = false;


    protected $hidden = [
         
    ];



}
