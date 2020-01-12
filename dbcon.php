<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'users';

$con = mysqli_connect($hostname, $username, $password, $database);
// Check connection
if (!$con){
    die("Connection failed : " . mysqli_connect_error());
} 