<?php
	// connect sql
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sharecode";
	// table info
	$tbname = "sharecode";
	// table sharecodes
	// create connection
	$conn = new mysqli($servername,$username,$password,$dbname);
	// check connection
	if($conn -> connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
?>