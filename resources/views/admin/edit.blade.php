<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>
    <form action="" method="post">
        @csrf
        Name <input type="text" name="name" value="{{$users->name}}"><br>

        Username <input type="text" name="username" value="{{$users->username}}"><br>

        Email <input type="text" name="email" value="{{$users->email}}"><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>