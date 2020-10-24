<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'uhv6';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
    die('Connection failed'.mysqli_connect_error());
}

$sql = 'CREATE TABLE user1 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
)';

if (mysqli_query($conn, $sql)) {
    echo 'table user1 create successfully';
} else {
    echo "Error creating table".mysqli_error($conn);
}

mysqli_close($conn);
