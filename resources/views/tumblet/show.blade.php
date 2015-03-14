
@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default tumblet">
                    <div class="panel-heading"><h3 class="panel-title">{{ $tumblet->title }}</h3></div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="col-sm-2 text-center">Post ID</th>
                            <th class="col-sm-2 text-center">Date Created</th>
                            <th class="col-sm-8">Post URL</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <th class="text-center">{{ $post->id }}</th>
                                <th class="text-center">{{ $post->createdDate->format('M d, Y') }}</th>
                                <th><a href="{{$post->link}}"> {{ $post->link }}</a></th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="panel-footer text-center">
                        {!! with(new Tumblet\Tumblet\Pagination($pages))->render(); !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection