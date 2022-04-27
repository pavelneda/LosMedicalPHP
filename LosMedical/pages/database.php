<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'losmedical';

$link = mysqli_connect($host, $user, $password, $db_name);
if ($link->connect_error){
    die("Connection failed: " . $link->connect_error);
}
mysqli_set_charset($link, "utf8");


?>
