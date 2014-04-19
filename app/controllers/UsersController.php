<?php

// app/controllers/UsersController.php

class UsersController extends BaseController
{
   public function index()
   {
      // Show a listing of all users.
      $users = User::all();

      //return View::make('index_user', compact('users'));

      return View::make('users/index', compact('users'));

      //return Response::make('Controller Users');
   }

   public function create()
   {
      // Show the create user form.
      return View::make('users/create');
   }

   public function handleCreate()
   {
      // Handle create form submission.
      $user = new User;
      $user->username        = Input::get('username');
      $user->password    = Input::get('password');
      $user->email     = Input::get('email');
      $user->first_name = Input::get('first_name');
      $user->last_name = Input::get('last_name');
      $user->phone = Input::get('phone');
      $user->save();

      return Redirect::action('UsersController@index');
   }

   public function edit(User $user)
   {
      // Show the edit user form.
      return View::make('users/edit', compact('user'));
   }

   public function handleEdit()
   {
      // Handle edit form submission.
      $user = User::findOrFail(Input::get('id'));
      $user->username        = Input::get('username');
      $user->password    = Input::get('password');
      $user->email     = Input::get('password');
      $user->first_name = Input::get('first_name');
      $user->last_name = Input::get('last_name');
      $user->phone = Input::get('phone');
      $user->save();

      return Redirect::action('UsersController@index');
   }

   public function delete(User $user)
   {
      // Show delete confirmation page.
      return View::make('users/delete', compact('user'));

      //return Response::make('Delete Confirm');
   }

   public function handleDelete()
   {
      // Handle the delete confirmation.
      $id = Input::get('user');
      $user = User::findOrFail($id);
      $user->delete();

      return Redirect::action('UsersController@index');
   }
}
