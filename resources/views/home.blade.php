@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">tumblet</h3></div>

                    <div class="panel-body">
                        <form class="form-inline" method="post" action="tumblet/create">
                            <p class="instructions">
                                Type in a Tumblr blog name to see its posts!
                            </p>
                            <div class="input-group">
                                <input type="text" class="form-control text-right" name="tumblrname"><span class="input-group-addon">.tumblr.com</span>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
