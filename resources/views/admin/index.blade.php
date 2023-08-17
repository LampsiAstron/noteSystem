<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hi, {{session('user')->name}}!</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>USERNAME</th>
            <th>EMAIL</th>
            <th>CREATED AT</th>
            <th>ACTION</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td>
                    <a href="admin/edit/{{$user->id}}">Edit</a>
                    <a href="admin/delete/{{$user->id}}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{$users->links()}}
</body>
</html>