@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>
                        Hi {{Auth::user()->name}}, Here is the list of links :
                    </p>

                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    Id
                                </th>
                                <th class="text-center">
                                    URL
                                </th>
                                <th class="text-center">
                                    Created at
                                </th>
                                <th class="text-center">
                                    Updated at
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($links as $link)
                            <tr>
                                <td>
                                    {{$link['id']}}
                                </td>
                                <td>
                                    <a href="{{route('readLink', $link['id'])}}" title="Test the link {{$link['id']}} !" target="_blank">
                                        {{$link['url']}}
                                    </a>
                                </td>
                                <td>
                                    {{$link['created_at']}}
                                </td>
                                <td>
                                    {{$link['updated_at']}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{--pagination later--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
