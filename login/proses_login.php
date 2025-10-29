<?php
include '../conn.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];


if (!$username || !$password) {
    echo "<script>alert('Username dan password tidak boleh kosong!'); window.location='../index.php';</script>";
    exit();
} 

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    echo "<script>alert('Login berhasil!'); window.location='../dashboard.php';</script>";
    exit();
} else {
    echo "<script>alert('Username atau password tidak ditemukan'); window.location='../index.php';</script>";
}
mysqli_close($conn);