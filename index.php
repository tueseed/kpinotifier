<html>
	<head>
		<title>KPI-NOTIFIER</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0," charset="utf-8">
		<title>BOT TRAIN PEA S.1</title>
		<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link href="tagsinput.css" rel="stylesheet" type="text/css">
		<script src="tagsinput.js"></script>
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
			iframe 
			{
				width: 100%;
				height: 100%;
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
					<h1>KPi-</h1>
				</div>
			</div>
		</div>
		<div class="mt-2 container-fluid">
			<div class="col-lg-3">
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
										echo "<a data-toggle='collapse' href='#collapse".$col_num."'>".$obj_main["topic_num"].".".$obj_main["topic"]."</a>";
									echo "</h4>";
								echo "</div>";
								echo "<div id='collapse".$col_num."' class='panel-collapse collapse'>";
										$sql_sub_main = "SELECT * FROM tbl_topic_submain WHERE topic_parent='".$obj_main["topic_num"]."'";
										$query_submain = mysqli_query($conn,$sql_sub_main);
										$col_num1 = 1;
										while($obj_submain = mysqli_fetch_array($query_submain))
										{
											echo "<div class='panel panel-info'>";
												echo "<div class='panel-heading'>";
													echo "<h4 class='panel-title'>";
														echo "<a data-toggle='collapse' href='#collapsesub".$col_num1."'>".$obj_submain["topic_num"].".".$obj_submain["topic"]."</a>";
													echo "</h4>";
												echo "</div>";
												echo "<div id='collapsesub".$col_num1."' class='panel-collapse collapse'>";
													$sql_sub = "SELECT * FROM tbl_topic_sub WHERE topic_parent='".$obj_submain["topic_num"]."'";
													$query_sub = mysqli_query($conn,$sql_sub);
													while($obj_sub = mysqli_fetch_array($query_sub))
													{
														echo "<ul class='list-group'>";
															echo "<a href='display.php?topic=".$obj_sub["topic_num"]."' target='display' class='list-group-item'>".$obj_sub["topic_num"].".".$obj_sub["topic"]."</a>";
														echo "</ul>";
													}
												echo "</div>";
											echo "</div>";
											$col_num1 = $col_num1 + 1;
										}
								echo "</div>";
							echo "</div>";	
							$col_num = $col_num + 1;
						}	
					?>
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="modal" href="#addtopic">เพิ่มรายการ</a>
								<i class="fa fa-plus-square"></i>
							</h4>
						</div>
					</div>
					<div class="modal fade" id="addtopic" role="dialog">
						<div class="modal-dialog modal-lg">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">เพิ่มหัวข้อการประเมิน</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body">
									<div class="form-group">  
										<label for="topic_main">หัวข้อหลัก</label> 
										<select class="form-control form-control-lg" id="topic_main" name="topic_main" onchange="send(this.value)">
											<option>เลือกหัวข้อหลัก</option>
											<?php
												$sql_topic_main = "SELECT * FROM tbl_topic_main";
												$query_topic_main = mysqli_query($conn,$sql_topic_main);
												while($obj_topic_main = mysqli_fetch_array($query_topic_main))
												{
													echo "<option value='".$obj_topic_main["topic_num"]."'>".$obj_topic_main["topic"]."</option>";
												}
											?>
											<option value="add_new">เพิ่มหัวข้อใหม่</option>
										</select>
									</div>
									<div class="form-group">
										<input class="form-control" type="text" name="topic_main" id="topic_main" placeholder="" />
									</div class="form-group">
										<label for="topic_main">หัวข้อย่อย 1</label> 
										<select class="form-control form-control-lg" id="topic_submain" name="topic_submain">
											<option>เลือกหัวข้อย่อย 1</option>
											<option value="add_new">เพิ่มหัวข้อใหม่</option>
										</select>
									<div>
									</div>
									<div class="form-group">
										<input class="form-control" type="text" name="topic_main" id="topic_main" placeholder="" />
									</div>
									<div class="form-group">
										<input class="form-control" type="text" name="topic_main" id="topic_main" placeholder="" />
									</div>
									<div class="form-group">
										<input class="form-control" type="text" name="topic_main" id="topic_main" placeholder="" />
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">ตกลง</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-9">
				<iframe src="demo_iframe.htm" name="display" frameborder="0" width="100%">
			</div>
		</div>
		<script>
			function send(data)
			{
				var formData = new FormData();
				formData.append('data', data);
				$.ajax({
                    url: 'recive.php',
                    method: 'POST',
                    data: formData,
                    async: true,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(response) {
						var opt1 = document.getElementById("topic_submain");
						opt1.options.length = 0;
						var obj = jQuery.parseJSON(response);
						var i = 0;
                        alert(obj[1].topic);
						opt1.options[0] = new Option("เลือกหัวข้อย่อย 111111","เลือกหัวข้อย่อย 11111");
						while(obj[i].topic)
						{
							opt1.options[i] = new Option(obj[i].topic,obj[i].topic);
							i++;
						}
						opt1.options[i+1] = new Option("เพิ่มหัวข้อใหม่","เพิ่มหัวข้อใหม่ 1");
                    }
                    
                });
			}
		</script>
	</body>
</hmtl>