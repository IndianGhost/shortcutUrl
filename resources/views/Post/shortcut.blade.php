@extends('layouts.default')

@section('title')
    Your Shortcut
@endsection

@section('main')
    <main role="main" class="container">
        
        <div class="starter-template">
            <h1>The best &amp; easiest way to shortcut an URL <span class="fa fa-heart"></span> !</h1>
            <p class="lead">
                Created By.<br>
                <a href="https://github.com/IndianGhost">Indian Ghost</a> &copy; 2018.
            </p>
            <p class="lead">
                <a href="{{route('readLink', $id)}}">
                    <span class="fa fa-link"></span> {{route('readLink', $id)}}
                </a>
            </p>
            <p class="lead">
                Thanks for using shortcURL
            </p>
        </div>

    </main><!-- /.container -->
@endsection