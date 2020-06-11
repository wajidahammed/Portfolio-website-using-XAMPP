<?php
	
	$servername = "localhost:3306";
	$dbUsername = "wajiduta_wp1";
	$dbPassword = "8179667641My";
	$dbname = "wajiduta_Portfolio";
	
	$conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbname);
	
	if(!$conn){
		die("Connection failed: ".mysqli_connect_error());
	}
	
?>