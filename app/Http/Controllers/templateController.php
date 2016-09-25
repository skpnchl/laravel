<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class templateController extends Controller
{
	public function index(){
		return view('template');
	}
}
