<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "KEPEGAWAIAN";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// check connection
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

// query SQL
$sql1 = "CREATE TABLE POSISI (
posisi_id INT(6) PRIMARY KEY,
nama_posisi VARCHAR(25) NOT NULL,
min_gaji INT(10),
max_gaji INT(10)
)";

$sql2 = "CREATE TABLE DEPARTEMEN (
departemen_id INT(6) PRIMARY KEY,
nama_departemen VARCHAR(25) NOT NULL,
posisi_id INT(6),
FOREIGN KEY (posisi_id) REFERENCES POSISI (posisi_id) ON DELETE CASCADE ON UPDATE CASCADE
)";

$sql3 = "CREATE TABLE PEGAWAI (
pegawai_id INT(6) AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
notelp VARCHAR(20) NOT NULL,
alamat VARCHAR(50) NOT NULL,
gaji INT(10),
posisi_id INT(6),
departemen_id INT(6),
FOREIGN KEY (posisi_id) REFERENCES POSISI (posisi_id) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY (departemen_id) REFERENCES DEPARTEMEN (departemen_id) ON DELETE CASCADE ON UPDATE CASCADE
)";

// pesan informasi
if (mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2) && mysqli_query($conn, $sql3)) {
	echo "Tabel PEGAWAI, POSISI, dan DEPARTEMEN berhasil dibuat";
} else {
	echo "Terjadi kesalahan : ".mysqli_error($conn);
}

mysqli_close($conn);
?>