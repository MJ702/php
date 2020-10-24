<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'uhv6';

// create connection
$conn = mysqli_connect($servername, $username, $password);

// check connection
if (!$conn) {
    die('Connection fail'.mysqli_connect_error());
}

// sql query --> create table
$sql = 'CREATE DATABASE '.$dbname;

// execute sql query and print appropriate msg for user
if ($conn->query($sql)) {
    echo "Database ".$dbname."create successfully";
}
else {
    echo 'Error creating database'.$conn->error;
}

// connection close
$conn->close();