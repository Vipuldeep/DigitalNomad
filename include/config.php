<?php
//define constants for connection info
define("MYSQLUSER","root");
define("MYSQLPASS","");
define("HOSTNAME","localhost");
define("MYSQLDB","team02nov2018_digitalnomad");

//make connection to database
function db_connect()
{
	$conn = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	if($conn -> connect_error) {
		die('Connect Error: ' . $conn -> connect_error);
	}
	return $conn;
} 
?>


