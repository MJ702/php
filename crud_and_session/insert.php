<?php

    include ('auth.php');
    $conn = require ('db_connection.php');
    $status = "";

    if (isset($_REQUEST['insert'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $trd_date = date("Y/m/d");
        $submittedby = $_SESSION['username'];


        $insert_sql = "INSERT INTO register.new_record (trn_date, name, age, submittedby)
                                    VALUE ('$trd_date', '$name', '$age', '$submittedby')
                 ";
        if (mysqli_query($conn, $insert_sql)) {
            $status = 'New Record insert successfully <br> <a href="view.php">View Inserted record</a>';
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserting data..</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <div class="form">
        <p><a href="dashboard.php">Dashboard</a> | <a href='view.php'>View Record</a> | <a href="logout.php">Logout</a></p>
        <form method="post">
            <label for="name"><input type="text" name="name" placeholder="Enter name" required></label> <br>
            <label for="age"><input type="text" name="age" placeholder="Enter age" required></label> <br>

            <input type="submit" name="insert" value="Submit"/>
        </form>

        <p><?php echo $status; ?> </p>
    </div>


</body>
</html>
