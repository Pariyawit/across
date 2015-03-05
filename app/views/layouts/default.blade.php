
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">

		<title>ACROSS</title>

		<!-- Bootstrap core CSS -->
		
		<link href="assets/css/across.css" rel="stylesheet">
		<!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->

	</head>

	<body>

		<div class="container">

			<div class="masthead">
				<h3 class="text-muted">{{ HTML::link('/', 'ACROSS')}}</h3>
				<!-- <nav>
					<ul class="nav nav-justified">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Projects</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Downloads</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</nav> -->
			</div>


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
