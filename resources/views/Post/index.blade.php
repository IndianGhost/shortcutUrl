@extends('layouts.default')

@section('title')
    Home page
@endsection

@section('main')
<main role="main" class="container">

    <div class="starter-template">
        <h1>The best &amp; easiest way to shortcut an URL <span class="fa fa-heart"></span> !</h1>
        <p class="lead">
            Created By.<br>
            <a href="https://github.com/IndianGhost">Indian Ghost</a> &copy; 2018.
        </p>
    </div>

    <form method="post" action="{{route('createLink')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <input class="form-control" type="text" name="url" placeholder="http://..."/>
        </div>
        <div class="form-group">
            <input class="btn-block btn-info btn-info--customized" type="submit" value="Submit"/>
        </div>

    </form>
</main><!-- /.container -->
@endsection