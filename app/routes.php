<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	//return View::make('hello');
   return View::make('index');
});

Route::get('/login', function()
{
   //return View::make('login_form');
   return View::make('login');
});


Route::get('/post', function()
{
   //return View::make('login_form');
   return View::make('debug.post-values');
});

Route::post('/login', function()
{
   $credentials = Input::only('email', 'password');
   $remember = Input::has('remember');
   if (Auth::attempt($credentials, $remember))
   {
      return Redirect::intended('/');
      //return View::make('debug.post-values');
   }
   else
   {
      return Response::make("Bad Password");
      //return Response::make($credentials );
      return View::make('debug.post-values');
   }
});

/**
 * Groups of routes that needs authentication to access.
 */
Route::group(array('before' => 'auth'), function()
{
Route::get('/user', function()
{
   return View::make('create_user_form');
});

Route::post('/user', function()
{
   $user = new User;
   $user->username   = Input::get('username');
   $user->password   = Hash::make(Input::get('password'));
   $user->email      = Input::get('email');
   $user->first_name = Input::get('first_name');
   $user->last_name  = Input::get('last_name');
   $user->phone      = Input::get('phone');
   $user->save();

   return Response::make('User created!');
});

Route::get('/secure', array(
   'before' => 'auth',
   function()
   {
      return View::make('secure');
   }
));

Route::get('/logout', function()
{
   Auth::logout();
   return View::make('logout');
});

// Contact Maintenance

Route::model('contact', 'Contact');
Route::model('committee', 'Committee');
Route::model('user', 'User');

// Show pages.
Route::get('/contacts', 'ContactsController@index');
//Route::get('/contacts',
//   function()
//   {
//      return Response::make('Contacts');
//});
Route::get('/contacts/create', 'ContactsController@create');
Route::get('/contacts/edit/{contact}', 'ContactsController@edit');
Route::get('/contacts/delete/{contact}', 'ContactsController@delete');

// Handle form submissions.
Route::post('/contacts/create', 'ContactsController@handleCreate');
Route::post('/contacts/edit', 'ContactsController@handleEdit');
Route::post('/contacts/delete', 'ContactsController@handleDelete');

// User Maintenance
// Show pages.
Route::get('/users', 'UsersController@index');
//Route::get('/users',
//   function()
//   {
//      return Response::make('Users');
//});
Route::get('/users/create', 'UsersController@create');
Route::get('/users/edit/{user}', 'UsersController@edit');
Route::get('/users/delete/{user}', 'UsersController@delete');

// Handle form submissions.
Route::post('/users/create', 'UsersController@handleCreate');
Route::post('/users/edit', 'UsersController@handleEdit');
Route::post('/users/delete', 'UsersController@handleDelete');
});