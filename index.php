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
		<div class="mt-2 container-fluid">
			<div class="col-lg-2">
				<div class="panel-group">
					<?php
						$sql_main = "SELECT * FROM tbl_topic_main";
						$query_main = mysqli_query($conn,$sql_main);
						$col_num = 1;
						while($obj_main = mysqli_fetch_array($query_main))
						{
							echo "<div class='panel panel-primary'>";
								echo "<div class='panel-heading'>";
									echo "<h4 class='panel-title'>";
										echo "<a data-toggle='collapse' href='#collapse".$col_num."'>".$obj_main["topic"]."</a>";
									echo "</h4>";
								echo "</div>";
								echo "<div id='collapse".$col_num."' class='panel-collapse collapse'>";
										$sql_sub_main = "SELECT * FROM tbl_topic_submain WHERE topic_parent='".$obj_main["topic_num"]."'";
										$query_submain = mysqli_query($conn,$sql_sub_main);
										$col_num1 = 1;
										while($obj_submain = mysqli_fetch_array($query_submain))
										{
											echo "<div class='panel panel-info'>">;
												echo "<div class='panel-heading'>";
													echo "<h4 class='panel-title'>";
														echo "<a data-toggle='collapse' href='#collapse".$col_num1."'>".$obj_submain["topic"]."</a>";
													echo "</h4>";
												echo "</div>";
												echo "<div id='collapse".$col_num1."' class='panel-collapse collapse'>";
													$sql_sub = "SELECT * FROM tbl_topic_sub WHERE topic_parent='".$obj_submain["topic_num"]."'";
													$query_sub = mysqli_query($conn,$sql_sub);
													while($obj_sub = mysqli_fetch_array($query_sub))
													{
														echo "<ul class='list-group'>";
															echo "<li class='list-group-item'>".$obj_sub["topic"]."</li>";
														echo "</ul>";
													}
												echo "</div>";
											echo "</div>";
											$col_num1 = $col_num1+1;
										}
								echo "</div>";
							echo "</div>";	
							$col_num = $col_num + 1;
						}	
					?>
				</div>
			</div>
			<div class="col-lg-10">
			</div>
		</div>
	</body>
</hmtl>