<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title>Todo list</title>
</head>
<body>
        <h1>Update todo</h1>
    </br>
        <div class="todos-edit">
            <form method="post" action="{{route('todo.update', $todo->id )}}" > 
                @csrf
                @method('patch')
            <input class="todos-input" type="text" name="title" value="{{$todo->title}}" />
            <input class="todos-update" type="submit" value="Update" />

            </form>
            <button class="todos-back"><a href='/todos'>Back</a></button>
        </div>
    </br>
</body>
</html>

