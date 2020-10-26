<?php

$servername = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'student';

$conn = mysqli_connect($servername, $username, $pass, $dbname);

$sql = "UPDATE student.person SET age='33' WHERE lastname='meet'";

if (mysqli_query($conn, $sql)){
    echo 'Record update successfully';
}