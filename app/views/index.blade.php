@extends('layouts.default')

@section('content')

<div class="jumbotron">
	<h1>Welcome!</h1>
	<div class="row search">
		<div class="col-sm-8 col-sm-offset-2">
		<form role="form">
			<div class="input-group">
				<input type="text" class="form-control input-lg">
				<span class="input-group-btn">
					<button class="btn btn-default btn-lg" type="submit"><span class="glyphicon glyphicon-search"></button>
				</span>
			</div>
		</form>
	  </div>
	</div>
</div>

@stop