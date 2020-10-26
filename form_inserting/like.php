<?php
$servername = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'student';

$conn = mysqli_connect($servername, $username, $pass, $dbname);

if (isset($_POST['submit1'])) {

    $s = $_REQUEST['search'];
    $sql = "select * from student.person where firstname like '$s'";

    $rs = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($rs)) {
        echo "ID= ".$row['id']."and age= ".$row['age'];
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
<form action="like.php" method="post">
    <label for="search">Search: </label>
    <label for="search"><input type="text" name="search"></label> <br>
    <button type="submit" name="submit1">Submit</button>
</form>
</body>
</html>
