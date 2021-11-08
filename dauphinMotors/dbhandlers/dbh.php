<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "DauphinMotorsDB";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die('Connection Failed : ' . mysqli_connect_error());
}