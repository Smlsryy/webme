<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <h2>Login page</h2>
    <form action="login/proses_login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" autofocus> <br>
        <label for="password">Password:</label>
        <input type="password" name="password"> <br>
        <input type="submit" value="Login">

        <p>belum memiliki akun?</p>
        <a href="register/register.php">Register</a>
    </form>
</body>

</html>