<html>
	<head>
		<title>KPI-NOTIFIER</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0," charset="utf-8">
		<title>BOT TRAIN PEA S.1</title>
		<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style type="text/css">
			.row-center
			{
				text-align:center;
			}
			container-fluid 
			{
				font-family: 'Kanit', sans-serif;
			}
		</style>
	</head>
	<body>
		<?php
			$server = "us-cdbr-iron-east-01.cleardb.net";
			$username = "b946a03b24557c";
			$password = "0000fb9a";
			$db = "heroku_91b59e978ea198b";
			$conn = new mysqli($server, $username, $password, $db);
			mysqli_query($conn, "SET NAMES utf8");
		?>
		<div class="container-fluid" style="background-color:#b461fb;">
			<div class="row row-center">
				<div class="col-lg-4 offset-lg-4" style="background-color:#b461fb;">
					<h4>KPI-NOTIFIER</h4>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="col-lg-4">
				<div class="panel-group">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse1">FINANCE</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse">
							<ul class="list-group">
								<li class="list-group-item">One</li>
								<li class="list-group-item">Two</li>
								<li class="list-group-item">Three</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
			</div>
		</div>
	</body>
</hmtl>