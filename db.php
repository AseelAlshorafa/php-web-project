<?php
$dbserver_name = 'localhost';
$dbuser_name = 'root';
$db_password = '';
$dbname = 'std_portal';
$conn = mysqli_connect($dbserver_name, $dbuser_name, $db_password, $dbname);
if (!$conn) {
    die('failed to connect ' . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8");