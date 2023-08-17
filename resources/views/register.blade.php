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
        Name <input type="text" name="name" id=""><br>

        Username <input type="text" name="username" id=""><br>

        Email <input type="text" name="email" id=""><br>

        Password <input type="password" name="password" id=""><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>