@extends('layouts.default')

@section('content')
    <div class="page-header">
        <h1>Create Contact <small>and someday finish it!</small></h1>
    </div>

    <form action="{{ action('ContactsController@handleCreate') }}" method="post" role="form">
        <div class="form-group">
            <label for="user">User</label>
            <input type="text" class="form-control" name="user" />
        </div>
        <div class="form-group">
            <label for="Location">Location</label>
            <input type="text" class="form-control" name="location" />
        </div>
       <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" />
       </div>
       <div class="form-group">
          <label for="address">Address</label>
          <input type="text" class="form-control" name="address" />
       </div>
       <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" class="form-control" name="phone" />
       </div>
        <div class="checkbox">
            <label for="active">
                <input type="checkbox" name="active" /> Active?
            </label>
        </div>
        <input type="submit" value="Create" class="btn btn-primary" />
        <a href="{{ action('ContactsController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop

