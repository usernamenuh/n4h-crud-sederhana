<?php
$servername = "localhost";
$username = "root";
$pass = "admin";
$database = "cart_db";
$conn = mysqli_connect($servername, $username, $pass, $database);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>