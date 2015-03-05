@extends('layouts.default')

@section('content')

<div class="jumbotron">
	<div class="row search">
		<div class="col-sm-8 col-sm-offset-2">
		<form role="form">
			<div class="input-group">
				<input type="text" class="form-control input-lg">
				<span class="input-group-btn">
					<button class="btn btn-default btn-lg" type="submit"><span class="glyphicon glyphicon-search"></span></button>
				</span>
			</div>
		</form>
	  </div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<h3>Search result for : </h3>
			"Ikebukuro"
		</div>
		<table class="table">
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
			<tr>
				<td>{{ HTML::link('detail', 'Sakura Hotel Ikebukuro')}}</td>
				<td>Tokyo, Japan</td>
				<td>7</td>
				<td>7</td>
				<td>7</td>
				<td>7</td>
			</tr>
			<tr>
				<td>{{ HTML::link('detail', 'Sakura Hotel Ikebukuro')}}</td>
				<td>Tokyo, Japan</td>
				<td>7</td>
				<td>7</td>
				<td>7</td>
				<td>7</td>
			</tr>
			<tr>
				<td>{{ HTML::link('detail', 'Sakura Hotel Ikebukuro')}}</td>
				<td>Tokyo, Japan</td>
				<td>7</td>
				<td>7</td>
				<td>7</td>
				<td>7</td>
			</tr>
			<tr>
				<td>{{ HTML::link('detail', 'Sakura Hotel Ikebukuro')}}</td>
				<td>Tokyo, Japan</td>
				<td>7</td>
				<td>7</td>
				<td>7</td>
				<td>7</td>
			</tr>

		</tbody>
	</table>
	</div>
</div>

@stop