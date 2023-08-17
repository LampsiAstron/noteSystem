<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Log in</h1>
    <form action="" method="post">
        @csrf
        Email <input type="text" name="email" id=""><br>

        Password <input type="password" name="password" id=""><br>

        <input type="submit" value="Log in">
    </form>
</body>
</html>