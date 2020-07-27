<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$dbName   = 'corona';

$conn = mysqli_connect($hostName, $userName, $password, $dbName);
// $conn = new PDO($hostName, $userName, $password, $dbName);

?>