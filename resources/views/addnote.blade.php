<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add Note</h1>
    <a href="/notes">See Notes</a>
    @if(session('message'))
        {{session('message')}}
    @endif
    <form action="" method="post">
        @csrf 
        Title: <input type="text" name="title" id="">

        Notes: <input type="text" name="notes" id="">

        <input type="submit" value="ADD">
    </form>
</body>
</html>