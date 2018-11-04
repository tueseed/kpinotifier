<?php
			$server = "us-cdbr-iron-east-01.cleardb.net";
			$username = "bb638a0b9e5724";
			$password = "3556cc19";
			$db = "heroku_5663ecc9ac15f3e";
			$conn = new mysqli($server, $username, $password, $db);
			mysqli_query($conn, "SET NAMES UTF8");
			$data = "โพธ";
			$sql = "SELECT * FROM tbl_improve WHERE detail LIKE '%".$data."%'";
			$query = mysqli_query($conn,$sql);
			$a=1;
			while($obj = mysqli_fetch_array($query))
			{
				$data = $data.$obj["office"]." ".$obj["detail"]." ".$obj["detail"]." ".$obj["wbs"]." ".$obj["no"]." ".$obj["approval"];;
			}
			echo strlen($data)."<br>";
			echo $data;
?>