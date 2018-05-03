<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Achraf bellaali">
    <link rel="icon" href="{{asset('favicon.ico')}}"/>

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap-material-design.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <!-- Custom styles for this template -->
    <link href="{{asset('css/starter-template.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-light fixed-top" style="background-color: #2196f3 !important;">
    <a class="navbar-brand navbar-brand__yellow" href="{{route('homePage')}}">shortcURL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('homePage')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Portfoli</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact me</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success btn-outline-success__yellow my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

@yield('main')

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="{{asset('js/jquery-slim.min.js')}}"><\/script>')</script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap-material-design.min.js')}}"></script>
</body>
</html>
