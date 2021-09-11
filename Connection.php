<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName="assignment";

if(!$connectionDb = mysqli_connect($dbHost,$dbUser,$dbPassword,$dbName)){
    die("connection Failed");
}

?>