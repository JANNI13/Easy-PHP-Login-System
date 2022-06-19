<?php

$dbhost = "localhost";
$dbuser = "root";
$pass = "";
$name = "login_sample_db";

if(!$con = mysqli_connect($dbhost, $dbuser,$pass, $name))
{
    die("failed to connect!");
}
?>