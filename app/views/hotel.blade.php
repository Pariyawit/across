@extends('layouts.default')

@section('content')

<div class="jumbotron">
{{-- <div class="container"> --}}
	<div class="row">
		<h3>{{$info['name']}}</h3>
		<h4>{{$info['address']}}</h4>
	</div>
	<div class="row">
		<table class="table">
		<thead>
			<tr>
				<th>Topic</th>
				<th>Average Score</th>
				<th>Summary of Reviews</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Cleanliness</td>
				<td>{{ number_format($scores['cleanliness'],2);}}</td>
				<td>
					<ul>
						@foreach ($summary['cleanliness'] as $s)
							<li class="summary">
								{{$s}}
							</li>
						@endforeach
					</ul>
				</td>				
			</tr>
			<tr>
				<td>Comfort</td>
				<td>{{ number_format($scores['comfort'],2);}}</td>
				<td>
					<ul>
						@foreach ($summary['comfort'] as $s)
							<li class="summary">
								{{$s}}
							</li>
						@endforeach
					</ul>
				</td>
			</tr>
			<tr>
				<td>Location</td>
				<td>{{ number_format($scores['location'],2);}}</td>
				<td>
					<ul>
						@foreach ($summary['location'] as $s)
							<li class="summary">
								{{$s}}
							</li>
						@endforeach
					</ul>
				</td>
			</tr>
			<tr>
				<td>Staff</td>
				<td>{{ number_format($scores['staff'],2);}}</td>
				<td>
					<ul>
						@foreach ($summary['staff'] as $s)
							<li class="summary">
								{{$s}}
							</li>
						@endforeach
					</ul>
				</td>
			</tr>
			<tr>
				<td>Value for Money</td>
				<td>{{ number_format($scores['value'],2);}}</td>
				<td>
					<ul>
						@foreach ($summary['value'] as $s)
							<li class="summary">
								{{$s}}
							</li>
						@endforeach
					</ul>
				</td>
			</tr>

		</tbody>
	</table>
	</div>
</div>

@stop