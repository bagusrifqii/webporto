<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "webprofile";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$nama = $_POST['nama'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO users (nama, email, message) VALUES ('$nama', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
