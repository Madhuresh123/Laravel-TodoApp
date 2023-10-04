
    @extends('layouts.app')

 @section('content')

    <link rel="stylesheet" href="style.css">

 <h1>All Todos</h1>
    <div class="todos-container">
<button> <a href='/todos/create'>Create new todo</a></button>
    @foreach($todos as $todo)
        <div class="todo-list">
        {{$todo->title}}

        <div>
        <button class="list-button edit" ><a href='/todos/edit/{{$todo->id}}'>Edit</a></button>
        <button type="submit" class="list-button delete" onclick="event.preventDefault(); 
         if(confirm('Are you really want to delete')){
         document.getElementById('form-delete-{{$todo->id}}').submit()}">Delete</button>
        <form method="POST" style="display:none" id="{{'form-delete-'.$todo->id}}"  action="{{ route('todo.delete', $todo->id) }}">
            @csrf
            @method('DELETE')
        </form>
        </div>
        </div>
    @endforeach
</div>
 @endsection