<?php
    include ('auth.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to home page</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Welcome <?php echo $_SESSION['username']; ?></p>

        <p>This is secured area</p>
        <p><a href="dashboard.php">Dashboard</a></p>
        <p><a href="logout.php">Logout</a></p>

    </div>
</body>
</html>
