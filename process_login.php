<?php
// Sesuaikan konfigurasi database
$host = "localhost";
$username = "root";
$password = "";
$database = "nama_database";

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

// Mengambil data dari formulir login
$username = $_POST['username'];
$password = $_POST['password'];

// Melakukan query ke database
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($query);

// Memeriksa apakah login berhasil
if ($result->num_rows > 0) {
    // Login berhasil
    echo "Login berhasil!";
} else {
    // Login gagal
    echo "Login gagal. Silakan cek kembali username dan password.";
}

// Menutup koneksi ke database
$conn->close();
 
?>
