<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'uhv6';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection failed".$conn->connect_error);
}

$sql = "INSERT INTO user1 (firstname, lastname, email, reg_date)
                    value ('meet', 'kasodiya', 'kasodiyamit1234@gmail.com', '')";

if(mysqli_query($conn, $sql)) {
    echo 'record inserted successfully';
}
else {
    echo 'error in inserting record'.mysqli_error($conn);
}

$conn->close();