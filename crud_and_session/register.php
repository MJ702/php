<?php

$conn = require('db_connection.php');

if (isset($_POST['register'])) {

    $username = stripcslashes($_POST['username']);
    $email = stripcslashes($_POST['email']);
    $password = stripcslashes($_POST['password']);
    $trn_date = date("Y/m/d");

    $sql = "INSERT INTO register.users (username, email, password, trn_date)
                        value ('$username', '$email', '$password', '$trn_date')
            ";

    if ($result = mysqli_query($conn, $sql)) {
        if ($result) {
            echo "<div style='text-align: center'>
                    <h3>You are Registered successfully</h3> <br>
                    Click here to <a href='login.php'>Login</a>
                    </div>
                    ";
        }
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
    <title>Register</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<form method="post">
    <div class="form">
        <h1>Register here</h1>
        <label for="username"><input type="text" name="username" placeholder="username" required></label> <br>
        <label for="email"><input type="email" name="email" placeholder="email"></label> <br>
        <label for="username"><input type="password" name="password" placeholder="password" required></label> <br>

        <input type="submit" name="register" value="Register"/>
    </div>
</form>
</body>
</html>
<?php
}
?>



