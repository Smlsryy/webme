<?php
include '../conn.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];


if (!$username || !$password) {
    echo "Username dan password tidak boleh kosong!";
    exit();
} 

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("Location: ../dashboard.php");
    exit();
} else {
    echo "Username atau password tidak ditemukan";
}
mysqli_close($conn);