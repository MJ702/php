<?php

$servername = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'student';

$conn = mysqli_connect($servername, $username, $pass, $dbname);

$sql = "DELETE FROM student.person WHERE id='2' ";

mysqli_query($conn, $sql);
