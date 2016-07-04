<?php
$host = 'localhost';
$username = 'zvonimirstubicar';
$password = 'root';
$database = 'marvel';

$conn = mysqli_connect($host, $username, $password, $database) or die('Ne mogu se povezati s bazom!');
mysqli_set_charset($conn, "utf8");
date_default_timezone_set('Europe/Zagreb');
?>