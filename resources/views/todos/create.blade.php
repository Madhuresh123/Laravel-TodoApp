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
        <h1>Create Todo</h1>
        <div class="todos-container">
            <form method="post" action="/todos/create">
                @csrf
            <input class="todos-input"  type="text" name="title" />
            <input class="todos-update" type="submit" value="create" />
            </form>
        </div>
    </body>
</html>