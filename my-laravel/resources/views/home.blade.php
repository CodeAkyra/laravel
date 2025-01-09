<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    @auth
    <div>Logged in!</div>
    <form action="/logout" method="POST">
        @csrf
        <button>Logout</button>
    </form>
    @else
    <div>
        <h1>Register Account</h1>
        <form action="/register" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Enter Username">
            <input type="text" name="email" placeholder="Enter Email Address">
            <input type="password" name="password" placeholder="Enter Password">
            <button>Register</button>
        </form>
    </div>
    <div>
        <h1>Login Account</h1>
        <form action="/login" method="POST">
            @csrf
            <input type="text" name="loginName" placeholder="Enter Username">
            <input type="password" name="loginPassword" placeholder="Enter Password">
            <button>Login</button>
        </form>
    </div>
    @endauth
</body>

</html>