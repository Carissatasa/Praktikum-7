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
$sql = "INSERT INTO liga (kode, negara, champion)
VALUES ('Jer', 'Jerman', '4'), ('Spa', 'Spanyol', '3'), ('Eng', 'English', '3')";

if (mysqli_query($conn, $sql)) {
	echo "Insert into DB success";
} else {
	echo "Error inserting into DB: ".mysqli_error($conn);
}

mysqli_close($conn);
?>