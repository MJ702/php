<?php
    if (isset($_POST['sub1'])) {
        require ("required.php");

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];

        $servername = 'localhost';
        $username = 'root';
        $pass = '';
        $dbname = 'student';

        $conn = mysqli_connect($servername, $username, $pass, $dbname);

        if ($conn->connect_error) {
            die("connection failed".$conn->connect_error);
        }

        $sql = "INSERT INTO student.person (firstname, lastname, age)
                                    VALUES ('$firstname', '$lastname', '$age')
                ";
        if($conn->query($sql)) {
            echo 'record inserted successfully';
        }
        else {
            echo 'error in inserting'.$conn->connect_error;
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
    <title>Document</title>
</head>
<body>
<form action="from_insert.php" method="post">
    <label for="firstname">FirstName: </label>
    <label for="firstname"><input type="text" name="firstname"></label> <br>

    <label for="lastname">LastName: </label>
    <label for="lastname"><input type="text" name="lastname"></label> <br>

    <label for="age">Age: </label>
    <label for="age"><input type="text" name="age"></label> <br>

    <button type="submit" name="sub1">Insert</button>
</form>
</body>
</html>
