<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Edit</title>
</head>
<body>

<header>
    <nav>
        <h2 class="navtxt">To-do List</h2>
    </nav>
</header>


<main class="container">
    <form action="/edit/{{$todos->id}}" method="post">
    @csrf
        <input type="text" name="todo" value="{{$todos->todo}}">
        <button type="submit" class="btn btn-success">Update</button>
    </form>

</main>



<style>
     h2{
        text-align:center;
        font-size:2em;
        color:white;
    }
    nav{
        background-color:#1973ed;
        height:50px;
    }

    input{
        width:80%;
        border-radius:5px;
        margin-top:150px;
        height:40px;
    }
</style>    
</body>
</html>