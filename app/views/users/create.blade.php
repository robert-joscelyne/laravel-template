@extends('layouts.default')

@section('content')
    <div class="page-header">
        <h1>Create User <small>and someday finish it!</small></h1>
    </div>

    <form action="{{ action('UsersController@handleCreate') }}" method="post" role="form">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" />
        </div>
       <div class="form-group">
          <label for="password">password</label>
          <input type="text" class="form-control" name="password" />
       </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" />
        </div>
       <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" class="form-control" name="first_name" />
       </div>
       <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" class="form-control" name="last_name" />
       </div>
       <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" class="form-control" name="phone" />
       </div>
        <input type="submit" value="Create" class="btn btn-primary" />
        <a href="{{ action('UsersController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop

