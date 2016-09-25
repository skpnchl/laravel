<?php

namespace App\Http\Controllers;

use Request;

use Validator;
//use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;
use App\Post;
use Auth;

class PostController extends Controller
{
	public function getDeshboard()
    {
    	$posts = Post::orderBy('created_at', 'desc')->get();
    	return view('dashboard',['posts' => $posts]);
    }
    public function getDelete($postid)
    {
    	if(Request::ajax()){
    		$post = Post::where('id',$postid)->first();
    	    	if($post -> delete()){
    	    		return 'T';
    	    	}else{
    	    		return 'F';
    	    	}
    	}
    }

    public function getEdite($postid)
    {
        if(Request::ajax()){
            $post = Post::where('id',$postid)->first();

            $validator = Validator::make(Request::all(), ['edite'=>'required|min:2']);

            if(!$validator->fails()){
                $edite = htmlspecialchars(Request::input('edite'));
                $post->body = Request::input('edite');
                if($post->update()){
                    return Post::find($postid)->body;
                }else{
                    return "F";
                }
                
            }else{
                return $validator->errors()->all();
            }
        }
    }

    public function PostControllerPost(Request $request)
    {
    	if(Request::ajax()){
            $rules = array('body'=>'required|min:2'); 
            $validator = Validator::make(Request::all(), $rules);
            if(!$validator->fails()){
                $body = htmlspecialchars(Request::input('body'));
                $post = new Post();
                $post->body = $body;
                $post->user_id= Auth::user()->id;
                if($post->save()){
                	return 'T';
                }else{
                	return 'F';
                }
            }else{
                return $validator->errors()->all();
            }
        }
    }
}
