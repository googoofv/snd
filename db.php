<?php
$servername = "localhost";
$username = "root";
$password = "";       
$dbname = "s_n_d_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("CONNECTION FAIL:" . $conn->connect_error);
}

?>