<?php

//connect to the database
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "flacard";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

//if it doesn't connect
if (!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
