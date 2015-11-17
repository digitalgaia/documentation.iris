<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Project IRIS Development Documentation</title>
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link href="<?php echo $exe->url->asset('bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container" style="width: 500px; margin-top: 70px;">
			<h3>IRIS Development Documentation</h3>
			<form method="POST" role="form">
				<div class="form-group">
					<label>Passcode</label>
					<input type="password" class="form-control" name='passcode'>
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>

		<!-- jQuery -->
		<script src="<?php echo $exe->url->asset('bootstrap/js/bootstrap.min.js');?>"></script>
		<!-- Bootstrap JavaScript -->
	</body>
</html>