<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Note</h1>
    <form action="" method="post">
        @csrf 
        Title: <input type="text" name="title" value="{{$note->title}}">
        Notes: <input type="text" name="notes" value="{{$note->notes}}">

        <input type="submit" value="Update">
    </form>
</body>
</html>