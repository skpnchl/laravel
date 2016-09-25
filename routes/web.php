<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',['as'=>'home',function(){return view('primery');}]);

Route::get('/template','templateController@index')->name('template');

Route::get('/service',function (){
	return view('service');
})->name('service');


Route::get('/logos',function (){
	return view('logos');
})->name('logos');


Route::get('/about',function (){
	return view('about');
})->name('about');



Route::get('/domain-help',function (){
	return view('domain-help');
})->name('domain-help');



Route::get('/pricing',function (){
	return view('pricing');
})->name('pricing');


Route::get('/term-of-policy',function (){
	return view('term-of-policy');
})->name('term-of-policy');


Route::get('/contact','contactController@index')->name('contact');

Route::post('/contactajax','contactController@contact');

Route::post('/homecontactajax','contactController@contact1');



/*
*sign up sign in user
*/
Route::group(['middleware' => ['web']], function()
{
	Route::get('/login','signUpController@index');
	Route::post('/login','signUpController@SignIn')->name('login');

	Route::post('/creatnew','signUpController@SignUp');

	Route::get('/logout','signUpController@LogOut')->name('logout');

	Route::get('/dashboard',[
		'as' => 'dashboard',
		'uses' => 'PostController@getDeshboard',
		'middleware' => 'auth']); 

	Route::post('dashboard/post', [
		'as'=>'post',
		'uses'=>'PostController@PostControllerPost',
		'middleware'=>'auth']);
	Route::post('post-delete/{postid}',[
		'as'=>'delete',
		'uses'=>'PostController@getDelete',
		'middleware'=>'auth']);
	Route::post('post-edite/{postid}',[
		'as'=>'edite',
		'uses'=>'PostController@getEdite',
		'middleware'=>'auth']);
});

