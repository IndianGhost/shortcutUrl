@extends('layouts.default')

@section('title')
    Home page
@endsection

@section('style')
    <style type="text/css">
        .error{
            display: none;
            color : red;
            font-weight: bold;
        }
    </style>
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
    @if( isset($error) )
    <p class="alert alert-danger">
        Unfortunately, The URL you had just inserted is <strong>not valid</strong> !
    </p>
    @endif
    <form method="post" action="{{route('createLink')}}" class="js-validation">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <input class="form-control" type="text" name="url" placeholder="http://..." autofocus required/>
        </div>
        <div class="form-group">
            <input class="btn-block btn-info btn-info--customized" type="submit" value="Submit"/>
        </div>
        <div class="form-group">
            <p class="error error-required">
                *Champs obligatoire !
            </p>
        </div>
    </form>
</main><!-- /.container -->
@endsection

@section('javascript')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.js-validation').submit(function (e) {
                var url = $("input[name='url']");
                var urlValue = url.val();
                if(urlValue === null){
                    e.preventDefault();
                    $('.error-required').show(300);
                }
            });
        });
    </script>
@endsection