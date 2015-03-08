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
			@foreach ($results as $result)
			<tr>
				<td>
					<h4>{{ HTML::link('detail?hotel='.$result['title'], $result['name'])}}</h4>
					{{ $result['address'] }}
				</td>
				<td>{{ $result['city'] }}</td>
				<td>{{ $result['booking'] }}</td>
				<td>{{ $result['agoda'] }}</td>
				<td>{{ $result['tripadvisor'] }}</td>
				<td>{{ number_format($result['average'],2) }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
</div>

@stop