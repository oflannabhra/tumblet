@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">tumblet</div>

                    <div class="panel-body">
                        <form class="form-inline" method="post" action="tumblet/create">
                            <p class="instructions">
                                Type in a Tumblr blog name to see its posts!
                            </p>
                            <div class="form-group">
                                <input type="text" class="form-control text-right" name="tumblrname"> .tumblr.com
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
