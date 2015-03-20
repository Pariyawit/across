@extends('layouts.default')

@section('content')

<div class="jumbotron transparent wow slideInUp" data-wow-duration="2s">
	<div class="row">
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
	  		<div class="col-sm-12">
			<h3>Search result for : "{{ $search }}"</h3>
				{{-- <h3>&nbsp;&nbsp;&nbsp;"{{ $search }}"</h3> --}}
		</div>
	</div>
</div>

<div class="jumbotron search wow fadeIn">
	{{-- <div class="row">
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
	</div> --}}
	<div class="row">
		<div class="col-sm-4">
			{{-- <h3>Search result for :</h3>
				<h3>&nbsp;&nbsp;&nbsp;"{{ $search }}"</h3> --}}
		</div>
		<table class="table table-hover result">
		<thead>
			<tr>
				<th class="hotelname">HOTEL</th>
				<th class="city">CITY</th>
				{{-- <th>Booking</th> --}}
				<th><img src="/assets/pic/booking.jpg"></th>
				<th><img src="/assets/pic/agoda.png"></th>
				<th><img src="/assets/pic/tripadvisor.jpg"></th>
				{{-- <th>Agoda</th> --}}
				{{-- <th>TripAdvisor</th> --}}
				<th id="logo">ACROSS</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($hotels as $hotel)
			<tr>
				<td class="hotelname">
					<h4>{{ HTML::link('detail?hotel='.$hotel['title'], $hotel['name'])}}</h4>
					{{ $hotel['address'] }}
				</td>
				<td>{{ $hotel['city'] }}</td>
				<td>{{ $hotel['booking'] }}</td>
				<td>{{ $hotel['agoda'] }}</td>
				<td>{{ $hotel['tripadvisor'] }}</td>
				<td class="across">{{ number_format($hotel['average'],2) }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
</div>

@stop