<?php
$servername = "localhost";
$username = "root";
$password = '12345';
$db_name = "LifestyleStore";
// Create connection
$con = mysqli_connect($servername, $username, $password, $db_name);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
if(session_id() == '')
session_start();
?>