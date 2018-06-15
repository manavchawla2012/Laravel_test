<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        #p1 {background-color:rgb(255,0,0);opacity:0.6;}
        #p2 {color:rgb(0,255,0);opacity:0.6;}
        #p3 {background-color:rgb(0,0,255);opacity:0.6;}
        #p4 {background-color:rgb(192,192,192);opacity:0.6;}
        #p5 {background-color:rgb(255,255,0);opacity:0.6;}
        #p6 {background-color:rgb(255,0,255);opacity:0.6;}
        .div
        {
            width: 300px;
            height: max-content;
            border: 1px solid blue;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">@yield('name')</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active" ><a href="/">Home</a></li>
                <li class="dropdown" name="page1" name="name1">
                    <a class="dropdown-toggle" data-toggle="dropdown" id="p2" href="#" >Page 1 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/about" name="about">About</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li>
                <li ><a href="/about" name="page2">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
@section('body')
    @show
</body>
</html>
