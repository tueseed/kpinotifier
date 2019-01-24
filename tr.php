<?php
	$server = "us-cdbr-iron-east-03.cleardb.net";
	$username = "b0dac88958d660";
	$password = "ef6bc121";
	$db = "heroku_750bf9de350a63c";
	$conn = new mysqli($server, $username, $password, $db);
	mysqli_query($conn, "SET NAMES utf8");
	$sql_text = "SELECT * FROM tbl_tr-load";
	$query = mysqli_query($conn,$sql_text);
	while($obj = mysqli_fetch_array($query))
	{
		echo $obj["pea"];
	}
?>