<?php
	$data = "สายยึด";
	$dat1 = base64_encode($data);
	echo $dat1."<br>";
	echo base64_decode($dat1);
?>