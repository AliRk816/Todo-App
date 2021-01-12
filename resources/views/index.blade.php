<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Todo</title>
</head>
<body>
<header>
    <nav>
        <h2 class="navtxt">To-do List</h2>
    </nav>
</header>

<main class="container">

    <div class="statuts">
        @include('errorsuccess')
    </div>

    <form action="/walo" method="post">
    @csrf
    <div class="input-group mb-3">
    <input type="text" name="todo" class="form-control" placeholder="Add a Task" aria-label="Recipient's username" aria-describedby="basic-addon2">
    <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit">Add</button>
    </div>
    </div>
    </form>

    <h3>Todo List</h3>

    <h5>There are {{count($todos)}} Todos</h5>
    @if(count($todos)>= 1)
        @foreach($todos as $todo)
            <ul class="list-group m-4">
                <li class="list-group-item">{{$todo->todo}} <div class="buttons">
                @if($todo->completed <= 0)
                <a href="/completed/{{$todo->id}}"><button class="font"><i class="fa fa-check-square-o"></i></a></button>
                @else
                <h4>Completed<i class="fa fa-check"></i></h4>
                @endif
                <a href="/edit/{{$todo->id}}"><button type="button" class="btn btn-primary">Edit</button></a>
                <a href="/delete/{{$todo->id}}"><button type="button" class="btn btn-danger">Delete</button></a></div></li>
            </ul>
        @endforeach

        @else
        <p>The tasks doesn't exist</p>
    @endif




</main>
    

<style>

    .statuts{
        margin-top:40px;
    }

    h2{
        text-align:center;
        font-size:2em;
        color:white;
    }
    nav{
        background-color:#1973ed;
        height:50px;
    }

    .input-group{
        margin-top:30px;
    }

    h5{
        margin-left:940px;
    }

    .buttons{
        display:flex;
        justify-content:flex-end;
        align-items:center;
    }

    button{
        margin-left:10px;
    }

    .fa-check-square-o{
        color:white;
    }

    .font{
        background-color:green;
        border-radius:3px;
        border-color:green;
    }

    h4{
        color:green;
    }

</style>
</body>
</html>