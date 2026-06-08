<?php
$host     = "localhost";
$username = "root";
$password = ""; // Kosongkan jika pakai XAMPP bawaan
$database = "ALP-Database-Wall peak"; // Sesuaikan dengan nama databasemu

$conn = mysqli_connect($host, $username, $password, $database);

// Cek Koneksi (untuk jaga-jaga)
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>