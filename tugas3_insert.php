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

// query
$sql1 = "INSERT INTO POSISI (posisi_id, nama_posisi, min_gaji, max_gaji)
VALUES (1, 'Finance Manager', 5000000, 6000000)";

$sql2 = "INSERT INTO POSISI (posisi_id, nama_posisi, min_gaji, max_gaji)
VALUES (2, 'Programmer', 4000000, 6000000)";

$sql3 = "INSERT INTO DEPARTEMEN (departemen_id, nama_departemen, posisi_id)
VALUES (1, 'Finance', 1)";

$sql4 = "INSERT INTO DEPARTEMEN (departemen_id, nama_departemen, posisi_id)
VALUES (2, 'IT', 2)";

$sql5 = "INSERT INTO PEGAWAI (nama, email, notelp, alamat, gaji, posisi_id, departemen_id)
VALUES ('Dona', 'dona123@gmail.com', '081234234567', 'Jl. Moh. Yamin', 5250000, 1, 1)";

$sql6 = "INSERT INTO PEGAWAI (nama, email, notelp, alamat, gaji, posisi_id, departemen_id)
VALUES ('Arif Setyo', 'arif123@gmail.com', '087895473019', 'Jl. Sudirman', 4700000, 2, 2)";

// pesan informasi
if (mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2) && mysqli_query($conn, $sql3) && mysqli_query($conn, $sql4) && mysqli_query($conn, $sql5) && mysqli_query($conn, $sql6)) {
	echo "Data berhasil dimasukkan dan disimpan";
} else {
	echo "Terjadi kesalahan : ".mysqli_error($conn);
}

mysqli_close($conn);
?>