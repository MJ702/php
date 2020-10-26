<?php

$servername = 'localhost';
$username  = 'root';
$pass = '';
$dbname = 'student';

$conn = new mysqli($servername, $username, $pass);

if ($conn->connect_error) {
    die('connection error'.$conn->connect_error);
}


$sql = 'CREATE DATABASE '.$dbname;

if(mysqli_query($conn, $sql)) {
    $conn1 = mysqli_connect($servername, $username, $pass, $dbname);

    $sql1 = 'CREATE TABLE Person (
            id INT(6) UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY ,
            firstname VARCHAR(30) NOT NULL ,
            lastname VARCHAR(30) NOT NULL ,
            age INT(2) NOT NULL 
            )';

     mysqli_query($conn1, $sql1);

}
