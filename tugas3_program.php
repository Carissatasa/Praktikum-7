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


// Fungsi untuk menambah/simpan data pegawai
function tambah_pegawai($nama, $email, $notelp, $alamat, $gaji, $posisi_id, $departemen_id) {
    global $conn;
    $nama = mysqli_real_escape_string($conn, $nama);
    $email  = mysqli_real_escape_string($conn, $email);
    $notelp = mysqli_real_escape_string($conn, $notelp);
    $alamat = mysqli_real_escape_string($conn, $alamat);
    $gaji = (int) $gaji;
    $posisi_id = (int) $posisi_id;
    $departemen_id = (int) $departemen_id;
    
    $sql = "INSERT INTO PEGAWAI (nama, email, notelp, alamat, gaji, posisi_id, departemen_id) VALUES ('$nama', '$email', '$notelp', '$alamat', $gaji, $posisi_id, $departemen_id)";
    
    if (mysqli_query($conn, $sql)) {
        echo "Data pegawai berhasil disimpan";
    } else {
        echo "Terjadi kesalahan : " . mysqli_error($conn);
    }
}

// Fungsi untuk mengubah data pegawai
function ubah_pegawai($pegawai_id, $nama, $email, $notelp, $alamat, $gaji, $posisi_id, $departemen_id) {
    global $conn;
    $pegawai_id = (int) $pegawai_id;
    $nama = mysqli_real_escape_string($conn, $nama);
    $email  = mysqli_real_escape_string($conn, $email);
    $notelp = mysqli_real_escape_string($conn, $notelp);
    $alamat = mysqli_real_escape_string($conn, $alamat);
    $gaji = (int) $gaji;
    $posisi_id = (int) $posisi_id;
    $departemen_id = (int) $departemen_id;
    
    $sql = "UPDATE PEGAWAI SET pegawai_id=$pegawai_id, nama='$nama', email='$email', notelp='$notelp', alamat='$alamat', gaji=$gaji, posisi_id=$posisi_id, departemen_id=$departemen_id WHERE pegawai_id=$pegawai_id";
    
    if (mysqli_query($conn, $sql)) {
        echo "<br>Data pegawai dengan nama '$nama' berhasil diubah";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }
}

// Fungsi untuk menghapus data pegawai
function hapus_pegawai($pegawai_id) {
    global $conn;
    $pegawai_id = (int) $pegawai_id;
    
    $sql = "DELETE FROM PEGAWAI WHERE pegawai_id = $pegawai_id";
    
    if (mysqli_query($conn, $sql)) {
        echo "<br>Data pegawai dengan ID $pegawai_id berhasil dihapus";
    } else {
        echo "Terjadi kesalahan : " . mysqli_error($conn);
    }
}


// Contoh penggunaan
tambah_pegawai('Asmawati', 'asma123@gmail.com', '081234567891', 'Jl. Sekawan Indah', 4100000, 2, 1);
ubah_pegawai(3, 'Asmawati', 'asma123@gmail.com', '081234567891', 'Jl. Sekawan Asri', 4500000, 2, 1);
hapus_pegawai(1);

?>
