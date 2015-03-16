@extends('layouts.default')

@section('content')

<h2 class="index horizontal-center">ACROSS : Accomodation Review Summarization System!</h2>

<div class="index jumbotron transparent">
	{{-- <h2>ACRoSS : ACcomodation Review Summarization System!</h2> --}}
	<div class="row search">
		<div class="col-sm-8 col-sm-offset-2">
		{{ Form::open(['url' => 'search','method' => 'get']) }}
			<div class="input-group">
			 		{{Form::text('search','',["class"=>"form-control input-lg"])}}
			 		<span class="input-group-btn">
				 		{{Form ::button('<span class="glyphicon glyphicon-search">',
				 				["type" => "submit","class" => "btn btn-default btn-lg"])}}
			 		</span>
		 	</div>
		{{ Form::close() }}
	  </div>
	</div>
</div>

@stop