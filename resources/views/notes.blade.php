<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Notes</h1>
    <h2>Hi, {{session('user')->name}}</h2>
    <a href="/viewProfile">View Profile</a>
    <a href="/addnote">Add Note</a>
    @if(session('message'))
        {{session('message')}}
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>TITLE</th>
                <th>DESCRIPTION</th>
                <th>CREATED AT</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notes as $note)
            <tr>
                <td>{{$note->title}}</td>
                <td>{{$note->notes}}</td>
                <td>{{Carbon\Carbon::parse($note->created_at)->diffForHumans()}}</td>
                <td>
                    <a href="edit/{{$note->id}}">Edit</a>
                    <a href="delete/{{$note->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$notes->links()}}
</body>
</html>