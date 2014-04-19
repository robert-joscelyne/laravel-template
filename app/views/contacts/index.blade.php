@extends('contacts/layout')

@section('content')
    <div class="page-header">
        <h1>All Contacts <small>COntact FOlder</small></h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ action('ContactsController@create') }}" class="btn btn-primary">Create Contact</a>
        </div>
    </div>

    @if ($contacts->isEmpty())
        <p>There are no contacts! :(</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Publisher</th>
                    <th>Complete</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->title }}</td>
                    <td>{{ $contact->publisher }}</td>
                    <td>{{ $contact->complete ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ action('ContactsController@edit', $contact->id) }}" class="btn btn-default">Edit</a>
                        <a href="{{ action('ContactsController@delete', $contact->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@stop
