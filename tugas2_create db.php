<?php 
$servername = "localhost";
$username = "root";
$password = "";

// create connection
$conn = mysqli_connect($servername, $username, $password);
// check connection
if (!$conn) {
	die("Koneksi gagal : ".mysqli_connect_error());
}

// create database
$sql = "CREATE DATABASE KEPEGAWAIAN";
if (mysqli_query($conn, $sql)) {
	echo "Database KEPEGAWAIAN berhasil dibuat";
} else {
	echo "Terjadi kesalahan : ".mysqli_error($conn);
}

mysqli_close($conn);
?>