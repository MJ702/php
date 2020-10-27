<?php

    include ("auth.php");
    $conn = require ('db_connection.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Record</title>
</head>
<body>
    <h1>View Record</h1>

    <table border="3px" >
        <thead>
        <tr>
            <th>Sr.NO</th>
            <th>Name</th>
            <th>Age</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
            <?php
                $count = 1;
                $select_sql = "SELECT * FROM register.new_record ORDER BY id desc";

                $result = mysqli_query($conn, $select_sql);

                while($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td style="text-align: center"><?php echo $count; ?></td>
                    <td style="text-align: center;"><?php echo $row['name']; ?></td>
                    <td style="text-align: center"><?php echo $row['age']; ?></td>

                    <td style="text-align: center"><a href="update.php?id=<?php echo $row['id']; ?>" >Update</a></td>
                    <td style="text-align: center"><a href="delete.php?id=<?php echo $row['id']; ?>" >Delete</a></td>

                </tr>
            <?php
                $count++;
                }
            ?>
        </tbody>
    </table>
</body>
</html>
