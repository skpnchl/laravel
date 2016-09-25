<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use Mail;

use Response;

class contactController extends Controller
{
    public function index()
    {
    	return view('contact');
    }

    public function contact()
    {
    	if(Request::ajax()){
			$title = Request::input('name');
			$email = Request::input('email');
			$massage = Request::input('massage');

			Mail::send('email.send', ['title' => $title, 'massage' => $massage,'email'=> $email], function($message){
				$message->from('skpnchl@gmail.com', 'sk panchal');
				$message->to('skpnchl1@gmail.com');
		});

			return Response::json(Request::input('name'));
		};

    }

    public function contact1()
    {
    	if(Request::ajax()){
			$name = Request::input('name');
			$email = Request::input('email');
			$number = Request::input('number');

			Mail::send('email.send1', ['name' => $name, 'number' => $number,'email'=> $email], function ($message){
				$message->from('skpnchl@gmail.com', 'sk panchal');
				$message->to('skpnchl1@gmail.com');
			});

			return Response::json(Request::input('name'));
		};
    }
}
