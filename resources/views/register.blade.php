<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
<h1>Register</h1>
<form action="/register" method="post">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div>
        <label for="roles">Role</label>
        <select id="roles" name="roles">
            <option value="Business Unit">Business Unit</option>
            <option value="Manager">Manager</option>
            <option value="Developer">Developer</option>
        </select>
    </div>
    <div>
        <button type="submit">Register</button>
        <button type="reset">Reset</button>
    </div>
</form>
</body>
</html>
