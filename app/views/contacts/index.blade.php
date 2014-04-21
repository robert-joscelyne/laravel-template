@extends('layouts.sidebar')

@section('content')
    <div class="page-header">
        <h1>All Contacts <small>Contact Folder</small></h1>
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
                    <th>User</th>
                    <th>Location</th>
                    <th>Name</th>
                    <th>Address</th>
                   <th>Phone</th>
                   <th>Active</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->user }}</td>
                    <td>{{ $contact->location }}</td>
                    <td>{{ $contact->name}}</td>
                    <td>{{ $contact->address}}</td>
                    <td>{{ $contact->phone}}</td>
                    <td>{{ $contact->active ? 'Yes' : 'No' }}</td>
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
