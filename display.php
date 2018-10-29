<html>
	<head>
		<title>KPI-NOTIFIER</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0," charset="utf-8">
		<title>BOT TRAIN PEA S.1</title>
		<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style type="text/css">
			.row-center
			{
				text-align:center;
			}
			body 
			{
				font-family: 'Kanit', sans-serif;
			}
		</style>
	</head>
	<body>
		<div class="mt-2 container-fluid">
			<?php
				$server = "us-cdbr-iron-east-01.cleardb.net";
				$username = "b946a03b24557c";
				$password = "0000fb9a";
				$db = "heroku_91b59e978ea198b";
				$conn = new mysqli($server, $username, $password, $db);
				mysqli_query($conn, "SET NAMES utf8");
				if(isset($_GET["topic"]))
				{
					$sql_sub_topic = "SELECT * FROM tbl_topic_sub WHERE topic_num ='".$_GET["topic"]."'";
					$query_sub_topic = mysqli_query($conn,$sql_sub_topic);
					$obj_sub = mysqli_fetch_array($query_sub_topic);
				}
			?>
			<div class="row">
				<h3><?php echo $obj_sub["topic_num"].".".$obj_sub["topic"];?></h3>
			</div>
			<div class="row">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead class="thead-dark">
							<tr>
								<th scope="col">การไฟฟ้า</th>
								<th scope="col">เป้า</th>
								<th scope="col">ผล</th>								 
							</tr>
						</thead>
						<tbody>
							<tr><td>กฟอ.พธร.</td><td>100</td><td>100</td></tr>
							<tr><td>กฟอ.พธร.</td><td>100</td><td>100</td></tr>
							<tr><td>กฟอ.พธร.</td><td>100</td><td>100</td></tr>
							<tr><td>กฟอ.พธร.</td><td>100</td><td>100</td></tr>
							<tr><td>กฟอ.พธร.</td><td>100</td><td>100</td></tr>
						</tbody>
					</table>
				</div>
			</div>	
		</div>
	</body>
</hmtl>