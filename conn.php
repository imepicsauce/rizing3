<?php
// error_reporting(E_ALL ^ E_DEPRECATED);
// 	//CONNECTING HOST
// mysql_connect("localhost","root","");
// //CONNECTING DATABASE
// mysql_select_db("online_enroll");


// $servername = "localhost";
// $username = "username";
// $password = "root";
// $dbname = "online_enroll";


// Create connection
$conn = new mysqli("localhost", "root", "");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

mysqli_select_db($conn, 'online_enroll');
?>