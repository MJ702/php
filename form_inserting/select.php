<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <table border="2" align="center">
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Age</th>
        </tr>
        <?php

            $servername = 'localhost';
            $username = 'root';
            $pass = '';
            $dbname = 'student';

            $conn = mysqli_connect($servername, $username, $pass, $dbname);

            $sql = 'select * from student.person';


            $record = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($record)) {
        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['age']; ?></td>
            </tr>
        <?php
            }
            ?>


    </table>
</body>
</html>