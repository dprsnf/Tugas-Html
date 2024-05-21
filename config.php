<?php

$host       = "localhost"; // Nama hostnya
$username   = "root"; // Username
$pass       = ""; // Password (Isi jika menggunakan password)
$db         = "profile_daffa"; // Database (Isikan dengan nama database yang kamu buat)
$conn    = mysqli_connect($host, $username, $pass, $db); // Koneksi ke MySQL

if (!$conn) {
    die("Not connected: " . mysqli_connect_error());
}

$query = "SELECT * FROM blog";
$result = $conn->query($query);

?>