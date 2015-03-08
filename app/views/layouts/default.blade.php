
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
				<nav class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
								<a class="navbar-brand" href="/">ACROSS</a>
						</div>
						{{-- <div class="navbar-collapse" id="bs-example-navbar-collapse-1">
								<div class="col-sm-6 col-md-6">
										<form class="navbar-form" role="search">
												<div class="input-group input-large">
														<input type="text" class="form-control input-large" placeholder="hotel name, city, country" name="q">
														<div class="input-group-btn">
																<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
														</div>
												</div>
										</form>
								</div>        
						</div> --}}
				</nav>
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
