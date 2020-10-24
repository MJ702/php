<?php
    $host = 'localhost';
    $username = 'root';
    $pass = '';

    $conn = mysqli_connect($host, $username, $pass);

    if ($conn->connect_errno){
        die("Connection error".$conn->connect_error);
    }

    $sql = 'CREATE DATABASE database3';

    if ($conn->query($sql)){
        echo 'database create successfully';
    }
    else {
        echo 'error'.$conn->error;
    }

    $conn->close();