<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Register</title>
</head>

<body>
    <h2>Register Page</h2>
    <form action="proses_register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"> <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"> <br> <br>
        <input type="submit" value="Register">
        <p>sudah memiliki akun?</p>
        <a href="../index.php">Login</a>
    </form>
</body>

</html>