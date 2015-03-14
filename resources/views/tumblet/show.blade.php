
@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default tumblet">
                    <div class="panel-heading">{{ $tumblet->title }}</div>
                    <div class="panel-body">
                        <table class="table table-responsive table-striped">
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
                    <div class="panel-footer text-center">
                        {!! with(new Tumblet\Tumblet\Pagination($pages))->render(); !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection