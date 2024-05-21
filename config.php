<?php

$host       = "localhost"; 
$username   = "root"; 
$pass       = ""; 
$db         = "profile_daffa"; 
$conn    = mysqli_connect($host, $username, $pass, $db); 

if (!$conn) {
    die("Not connected: " . mysqli_connect_error());
}

$query = "SELECT * FROM blog";
$result = $conn->query($query);

?>