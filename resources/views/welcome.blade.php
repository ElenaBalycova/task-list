<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Task List</title>

    <!-- Styles -->
    <link href="css/style.css" rel="stylesheet" type="text/css">


</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            TaskList
        </div>

        <div class="links">
            @guest
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @else
                <a href="{{route('admin.tasks.index')}}">Go to list</a>
            @endguest
        </div>
    </div>
</div>

</body>
</html>