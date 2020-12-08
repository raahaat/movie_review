<?php
	
	$host = "localhost";
	$port;
	$username = "root";
	$password = "";
	$database = "star";
	$tblMovies = "movies";
	$tblUsers = "users";


  
	
	$conn = @new mysqli($host, $username, $password, $database, $port);


	if (mysqli_connect_errno() != 0) {
	    $errno = mysqli_connect_errno();
	    $errmsg = mysqli_connect_error();
	    die("Connect Failed with: ($errno) $errmsg<br/>\n");
	}
?>