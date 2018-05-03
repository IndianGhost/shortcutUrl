@extends('layouts.default')

@section('title')
    Home page
@endsection

@section('main')
<main role="main" class="container">

    <div class="starter-template">
        <h1>The best &amp; easiest way to shortcut an URL <span class="fa fa-heart"></span> !</h1>
        <p class="lead">ipsum lorem dolor sit amet, consectetur adipiscing elit.<br>
            sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
    </div>

    <form method="#" action="#">
        <div class="form-group">
            <input class="form-control" type="text" name="url" placeholder="http://..."/>
        </div>
        <div class="form-group">
            <input class="btn-block btn-info btn-info--customized" type="submit" value="Submit"/>
        </div>
    </form>
</main><!-- /.container -->
@endsection