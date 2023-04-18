<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// check connection
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
$sql = "CREATE TABLE liga (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
kode VARCHAR(3) NOT NULL,
negara VARCHAR(30) NOT NULL,
champion int(3)
)";

if (mysqli_query($conn, $sql)) {
	echo "Table created successfully";
} else {
	echo "Error creating table: ".mysqli_error($conn);
}

mysqli_close($conn);
?>