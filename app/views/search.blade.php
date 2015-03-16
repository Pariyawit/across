@extends('layouts.default')

@section('content')

<div class="jumbotron">
	<div class="row search">
		<div class="col-sm-8 col-sm-offset-2">
		{{ Form::open(['url' => 'search','method' => 'get']) }}
			<div class="input-group">
			 		{{Form::text('search',$search,["class"=>"form-control input-lg"])}}
			 		<span class="input-group-btn">
				 		{{Form ::button('<span class="glyphicon glyphicon-search">',
				 				["type" => "submit","class" => "btn btn-default btn-lg"])}}
			 		</span>
		 	</div>
		{{ Form::close() }}
	  </div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<h3>Search result for : "{{ $search }}"</h3>
		</div>
		<table class="table table-hover">
		<thead>
			<tr>
				<th>Hotel Name</th>
				<th>City</th>
				<th>Booking</th>
				<th>Agoda</th>
				<th>TripAdvisor</th>
				<th>ACROSS</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($hotels as $hotel)
			<tr>
				<td>
					<h4>{{ HTML::link('detail?hotel='.$hotel['title'], $hotel['name'])}}</h4>
					{{ $hotel['address'] }}
				</td>
				<td>{{ $hotel['city'] }}</td>
				<td>{{ $hotel['booking'] }}</td>
				<td>{{ $hotel['agoda'] }}</td>
				<td>{{ $hotel['tripadvisor'] }}</td>
				<td>{{ number_format($hotel['average'],2) }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
</div>

@stop