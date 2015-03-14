
@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $tumblet->title }}</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Post ID</th>
                                    <th>Date Created</th>
                                    <th>Post URL</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <th>{{ $post->id }}</th>
                                    <th>{{ $post->createdDate->format('M d, Y') }}</th>
                                    <th><a href="{{$post->link}}"> {{ $post->link }}</a></th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <nav>
                            <ul class="pagination pagination-sm">
                                <li class=""><a href="{{ $currentPage-1 }}">&laquo</a> </li>
                                @foreach($pages as $page)
                                    <li class=""><a href="{{ $page }}">{{ $page }}</a></li>
                                @endforeach
                                <li class=""><a href="{{ $currentPage+1 }}">&laquo</a> </li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection