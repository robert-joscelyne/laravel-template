<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users Collection</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <a href="{{ action('UsersController@index') }}" class="navbar-brand">Users Collection</a>
            </div>
        </nav>
        @yield('content')
    </div>
</body>
</html>
