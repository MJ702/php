<?php

$conn = require ('db_connection.php');

session_start();
if (isset($_REQUEST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM register.users WHERE username= '$username' and password='$password'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);

    if ($row == 1) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
    }

    else {
        echo "<div style='text-align: center'>
                <h3>Invalid username and password</h3> <br>
                click Here to <a href='login.php'>Login</a>
              </div>";
    }
}
else {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<form action="login.php" method="post">
    <div class="form">
        <h1>Login here</h1>
        <label for="username"><input type="text" name="username" placeholder="username" required></label> <br>
        <label for="username"><input type="password" name="password" placeholder="password" required></label> <br>

        <input type="submit" name="login" value="Login"/>

        <p>Not registered yet?<a href="register.php">Register here</a></p>
    </div>
</form>
</body>
</html>

<?php
}
?>