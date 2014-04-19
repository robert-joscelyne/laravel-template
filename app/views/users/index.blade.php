@extends('/users/layout')

@section('content')
    <div class="page-header">
        <h1>All Users <small>Users FOlder!</small></h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ action('UsersController@create') }}" class="btn btn-primary">Create User</a>
        </div>
    </div>

    @if ($users->isEmpty())
        <p>There are no users! :(</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                   <th>First Name</th>
                   <th>Last Name</th>
                   <th>Phone</th>
                   <th>Created</th>
                   <th>Updated</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                   <td>{{ $user->password }}</td>
                   <td>{{ $user->email }}</td>
                   <td>{{ $user->first_name }}</td>
                   <td>{{ $user->last_name }}</td>
                   <td>{{ $user->phone }}</td>
                   <td>{{ $user->created_at }}</td>
                   <td>{{ $user->updated_at }}</td>
                    <td>
                        <a href="{{ action('UsersController@edit', $user->id) }}" class="btn btn-default">Edit</a>
                        <a href="{{ action('UsersController@delete', $user->email) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@stop
