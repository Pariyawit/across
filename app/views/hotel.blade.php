@extends('layouts.default')

@section('content')

<div class="hotel jumbotron wow fadeIn">
{{-- <div class="container"> --}}
	<div class="row">
		<h3>{{$info['name']}}</h3>
		<h4>{{$info['address']}}</h4>
	</div>
	<div class="row">
		<table class="table">
{{-- 		<thead>
			<tr>
				<th>Topic</th>
				<th>Average Score</th>
				<th>Summary of Reviews</th>
			</tr>
		</thead> --}}
		<tbody>
			<tr>
				{{-- <td class="topic">Cleanliness</td> --}}
				<td class="topic">CLEANLINESS</h4></td>
				<td class="score">{{ number_format($scores['cleanliness'],2);}}</td>
				<td>
					<ul>
						@foreach ($summary['cleanliness'] as $s)
							<li class="summary">
								<button type="button" class="btn btn-link pop" 
								data-container="body" data-toggle="popover" data-html="true" 
								data-trigger="focus"
								data-placement="bottom" data-content="
								{{$fullreview[$s][0]['review']}}<br><br>
									<em>
									{{$fullreview[$s][0]['name']}} [{{$fullreview[$s][0]['nationality']}}]<br>
									{{$fullreview[$s][0]['reviewDate']}}<br>
									{{$fullreview[$s][0]['source']}}
									</em>
									">
								  {{$s}}
								</button>
							</li>
						@endforeach
					</ul>
				</td>				
			</tr>
			<tr>
				<td class="topic">COMFORT</h4></td>
				<td class="score">{{ number_format($scores['comfort'],2);}}</td>
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
				<td class="topic">LOCATION</h4></td>
				<td class="score">{{ number_format($scores['location'],2);}}</td>
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
				<td class="topic">STAFF</td>
				<td class="score">{{ number_format($scores['staff'],2);}}</td>
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
				{{-- <td class="topic">Value for Money</td> --}}
				<td class="topic">VALUE FOR MONEY</td>
				<td class="score">{{ number_format($scores['value'],2);}}</td>
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