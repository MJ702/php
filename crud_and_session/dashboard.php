<?php
    include ('auth.php');
    $conn = require ('db_connection.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css" />
</head>
    <div class="form">
        <p>Welcome to Dashboard <?php echo $_SESSION['username']; ?></p>

        <p>This is secured area</p>
        <p><a href="index.php">Home</a></p>
        <p><a href="insert.php">Insert New Employee Record</a></p>
        <p><a href="view.php">View Record</a></p>
        <p><a href="logout.php">Logout</a></p>
    </div>
<body>

</body>
</html>
