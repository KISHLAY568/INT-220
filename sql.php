<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$database = "k22kg";

$conn = mysqli_connect($serverName, $userName, $password);
if (!$conn) {
    die("Connection Unsuccessfull : " . mysqli_connect_error());
} else {
    echo "Connection Successfull";
}
// $sql = "CREATE DATABASE K22KG";
// mysqli_query($conn, $sql);

$sql = "CREATE TABLE 'test' ";
