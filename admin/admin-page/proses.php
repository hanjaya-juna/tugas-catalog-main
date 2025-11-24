<?php
// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "CATALOG", "db_TUGAS-CATALOG-MAIN");

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil data dari form
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$gender = $_POST['gender'];
$pesan  = $_POST['pesan'];

// Query insert ke database
$sql = "INSERT INTO data_form (nama, email, gender, pesan) 
        VALUES ('$nama', '$email', '$gender', '$pesan')";

if ($koneksi->query($sql) === TRUE) {
    echo "✅ Data berhasil disimpan!<br>";
    echo "<a href='tampil.php'>Lihat Data</a>";
} else {
    echo "❌ Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
