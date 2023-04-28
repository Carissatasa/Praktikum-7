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
$sql = "CREATE TABLE buku_tamu (
id_bt INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(200) NOT NULL,
email VARCHAR(50) NOT NULL,
isi TEXT
)";

if (mysqli_query($conn, $sql)) {
	echo "Tabel buku_tamu berhasil dibuat";
} else {
	echo "Terjadi error saat membuat tabel : ".mysqli_error($conn);
}

mysqli_close($conn);
?>