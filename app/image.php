<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $fillable = [
    	'title','description','thumbnail','imageLink','user_id'
    ];
}
