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
            echo "Username sudah ada, gunakan username lainnya";
            exit();
        }
    }

    if (mysqli_query($conn, $query)) {
        echo "Registrasi berhasil. Silahkan melakukan <a href='../index.php'>login</a>.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }    
    mysqli_close($conn);
?>