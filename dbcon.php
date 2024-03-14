<?php
$host = 'localhost';
$db = 'esewa';
$user = 'root'; 
$password =''; 

$conn = new mysqli($host, $user, $password, $db);
if( $conn ->connect_error)
{
	echo "Failed to connect to MySQL". $conn->connect_error;
	exit;
}