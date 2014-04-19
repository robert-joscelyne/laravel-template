<html>
<head>
   <title>Create User</title>
</head>
<body>
<form action="{{ url('user') }}" method="post">
   <p><label for="username">Username:</label></p>
   <p><input type="text" name="username" placeholder="Username" /></p>
   <p><label for="email">Email:</label></p>
   <p><input type="text" name="email" placeholder="Email" /></p>
   <p><label for="password">Password:</label></p>
   <p><input type="password" name="password" placeholder="Password" /></\p>
   <p><label for="username">First Name:</label>
      <input type="text" name="first_name" placeholder="First Name" /></p>
   <p><label for="username">Last Name:</label>
      <input type="text" name="last_name" placeholder="Last Name" /></p>
   <p><label for="username">Phone:</label>
      <input type="text" name="phone" placeholder="Phone" /></p>
   <p><input type="submit" value="Create"></p>
</form>
</body>
</html>