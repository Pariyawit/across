
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="assets/pic/rilakkuma.jpg">
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300italic' rel='stylesheet' type='text/css'>

		<title>ACROSS</title>

		<!-- Bootstrap core CSS -->
		
		<link href="assets/css/across.css" rel="stylesheet">
		<!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->

	</head>

	<body>
 		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<a class="navbar-brand" href="/">ACROSS</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				
				<!-- /.navbar-collapse -->
				<div class="navbar-collapse" id="bs-example-navbar-collapse-1">
								<div class="col-sm-6 col-md-6 search-nav">
										{{ Form::open(['url' => 'search','method' => 'get']) }}
												<div class="input-group">
												 		{{Form::text('search','',["class"=>"form-control"])}}
												 		<span class="input-group-btn">
													 		{{Form ::button('<span class="glyphicon glyphicon-search">',
													 				["type" => "submit","class" => "btn btn-default"])}}
												 		</span>
											 	</div>
										{{ Form::close() }}
								</div>        
						</div>
			</div>
			<!-- /.container -->
		</nav>


		<div class="container">
			<div class="space"></div>

			<!-- Example row of columns -->
			@yield('content')

			<!-- Site footer -->
			<footer class="footer">
				<p>&copy; Company 2014</p>
			</footer>

		</div> <!-- /container -->


		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="/assets/js/bootstrap.min.js"></script>
	</body>
</html>
