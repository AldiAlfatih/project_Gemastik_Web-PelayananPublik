<?php
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "project_"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Menangkap data dari form
$nama_lengkap = $_POST['nama-lengkap'];
$nomor_telepon = $_POST['nomor-telepon'];
$jenis_barang = $_POST['jenis-barang'];
$kuantitas_barang = $_POST['kuantitas-barang'];
$metode_penyerahan = $_POST['metode-penyerahan'];

// Menangani upload file
$gambar_barang = addslashes(file_get_contents($_FILES['gambar-barang']['tmp_name']));

// Menyimpan informasi ke database
$sql = "INSERT INTO barang (nama_lengkap, nomor_telepon, jenis_barang, kuantitas_barang, gambar_barang, metode_penyerahan) 
VALUES ('$nama_lengkap', '$nomor_telepon', '$jenis_barang', '$kuantitas_barang', '$gambar_barang', '$metode_penyerahan')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
