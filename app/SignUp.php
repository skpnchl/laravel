<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class SignUp extends Model implements Authenticatable
{
    protected $fillable = ['name','email','password'];
    use \Illuminate\Auth\Authenticatable;

    public function posts()
    {
    	return $this->belongsToMany('App\Post');
    }
}
