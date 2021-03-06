@extends('layouts.default')

@section('content')
    <div class="page-header">
        <h1>Delete {{ $contact->name }} <small>Are you sure?</small></h1>
    </div>
    <form action="{{ action('ContactsController@handleDelete') }}" method="post" role="form">
        <input type="hidden" name="contact" value="{{ $contact->id }}" />
        <input type="submit" class="btn btn-danger" value="Yes" />
        <a href="{{ action('ContactsController@index') }}" class="btn btn-default">No way!</a>
    </form>
@stop
