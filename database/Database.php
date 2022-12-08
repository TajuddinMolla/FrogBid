<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'frogbid';

$connect_DB = mysqli_connect($host, $user, $password, $database);
if($connect_DB->connect_error){
    echo "Fail";
}
?>