@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">tumblet</div>

				<div class="panel-body">
					<form>
						Type in a Tumblr blog name to see its posts!
						<br>
						<input type="text" class="input">
						<input class="btn" type="submit">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
