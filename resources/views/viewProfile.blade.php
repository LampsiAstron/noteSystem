<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>View Profile</h1>
    <form action="" method="post">
        @csrf
        Name <input type="text" name="name" value="{{$user->name}}"><br>

        Username <input type="text" name="username" value="{{$user->username}}"><br>

        Email <input type="text" name="email" value="{{$user->email}}"><br>

        Password <input type="password" name="password" value="{{$user->password}}"><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>