<?php 
    $username = $_POST['username'];
    $password = $_POST['password'];
    include '../conn.php';
    $query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
    if ($username == "" || $password == "") {
        echo "Username dan password tidak boleh kosong!";
        exit();
    } else {
        $cekDuplikat = "SELECT * FROM user WHERE username='$username'";
        $result = mysqli_query($conn, $cekDuplikat);
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('username sudah ada, gunakan username lainnya'); window.location='../register/register.php';</script>";
            exit();
        }
    }

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='../index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }    
    mysqli_close($conn);
?>