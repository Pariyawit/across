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
								  "{{$s['bold']}}"
								  <button type="button" class="btn btn-link" data-toggle="modal" data-target="#{{$s['id']}}">
									  more
									</button>
									<div class="modal fade" id="{{$s['id']}}" tabindex="-1" role="dialog">
									  <div class="modal-dialog">
										<div class="modal-content">
										  <div class="modal-body">
											{{$s['full'][0]['review']}}
										  </div>
										  <div class="modal-footer">
										  	{{$s['full'][0]['name']}}
										  	{{$s['full'][0]['reviewDate']}}
										  	{{$s['full'][0]['nationality']}}
										  	(from {{$s['full'][0]['source']}}.com)
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										  </div>
										</div>
									  </div>
									</div>
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
								"{{$s['bold']}}"
								  <button type="button" class="btn btn-link" data-toggle="modal" data-target="#{{$s['id']}}">
									  more
									</button>
									<div class="modal fade" id="{{$s['id']}}" tabindex="-1" role="dialog">
									  <div class="modal-dialog">
										<div class="modal-content">
										  <div class="modal-body">
											{{$s['full'][0]['review']}}
										  </div>
										  <div class="modal-footer">
										  	{{$s['full'][0]['name']}}
										  	{{$s['full'][0]['reviewDate']}}
										  	{{$s['full'][0]['nationality']}}
										  	(from {{$s['full'][0]['source']}}.com)
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										  </div>
										</div>
									  </div>
									</div>
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
								"{{$s['bold']}}"
								  <button type="button" class="btn btn-link" data-toggle="modal" data-target="#{{$s['id']}}">
									  more
									</button>
									<div class="modal fade" id="{{$s['id']}}" tabindex="-1" role="dialog">
									  <div class="modal-dialog">
										<div class="modal-content">
										  <div class="modal-body">
											{{$s['full'][0]['review']}}
										  </div>
										  <div class="modal-footer">
										  	{{$s['full'][0]['name']}}
										  	{{$s['full'][0]['reviewDate']}}
										  	{{$s['full'][0]['nationality']}}
										  	(from {{$s['full'][0]['source']}}.com)
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										  </div>
										</div>
									  </div>
									</div>
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
								"{{$s['bold']}}"
								  <button type="button" class="btn btn-link" data-toggle="modal" data-target="#{{$s['id']}}">
									  more
									</button>
									<div class="modal fade" id="{{$s['id']}}" tabindex="-1" role="dialog">
									  <div class="modal-dialog">
										<div class="modal-content">
										  <div class="modal-body">
											{{$s['full'][0]['review']}}
										  </div>
										  <div class="modal-footer">
										  	{{$s['full'][0]['name']}}
										  	{{$s['full'][0]['reviewDate']}}
										  	{{$s['full'][0]['nationality']}}
										  	(from {{$s['full'][0]['source']}}.com)
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										  </div>
										</div>
									  </div>
									</div>
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
								"{{$s['bold']}}"
								  <button type="button" class="btn btn-link" data-toggle="modal" data-target="#{{$s['id']}}">
									  more
									</button>
									<div class="modal fade" id="{{$s['id']}}" tabindex="-1" role="dialog">
									  <div class="modal-dialog">
										<div class="modal-content">
										  <div class="modal-body">
											{{$s['full'][0]['review']}}
										  </div>
										  <div class="modal-footer">
										  	{{$s['full'][0]['name']}}
										  	{{$s['full'][0]['reviewDate']}}
										  	{{$s['full'][0]['nationality']}}
										  	(from {{$s['full'][0]['source']}}.com)
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										  </div>
										</div>
									  </div>
									</div>
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