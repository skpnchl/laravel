<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   	public function signup()
   	{
   		return $this->belongsTo('App\SignUp', 'user_id');
   	}
}
