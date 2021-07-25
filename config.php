<?php
$server = "historic-tours-app.cn2yuu5dv9vd.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "GeorgiaTech";
$database = "historical_logger";


$link = new mysqli($server, $username, $password, $database);

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
?>