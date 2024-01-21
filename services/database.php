<?php

$hostname = "localhost";
$database_name = "bro_resto";
$username = "root";
$password = "";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if ($db->connect_error) {
    echo "koneksi error";
    die();
}


