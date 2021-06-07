<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "rsma_traductionbdd";
	// Create connection 
	$connect_db = new mysqli($host, $username, $password, $dbname);

	// Check connection
	if ($connect_db->connect_error) {
		die("Connection failed: " . $connect_db->connect_error);
	}

?>

