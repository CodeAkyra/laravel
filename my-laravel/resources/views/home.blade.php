<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div>
        <h1>Register Account</h1>
        <form action="/register" method="POST">
            @csrf
            <input type="text" placeholder="Enter Username">
            <input type="password" placeholder="Enter Password">
            <button>Register</button>
        </form>
    </div>
</body>

</html>