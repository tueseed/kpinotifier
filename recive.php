<?php
	$server = "us-cdbr-iron-east-01.cleardb.net";
	$username = "b946a03b24557c";
	$password = "0000fb9a";
	$db = "heroku_91b59e978ea198b";
	$conn = new mysqli($server, $username, $password, $db);
	mysqli_query($conn, "SET NAMES utf8");
	$recive = $_POST["data"];
	$sql_submain = "SELECT * FROM tbl_topic_submain WHERE topic_parent = '".$recive."'";
	$query_submain = mysqli_query($conn,$sql_submain);
	$res = mysqli_fetch_array($query_submain);
	echo json_encode($res);
?>