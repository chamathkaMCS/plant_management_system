<?php
$serverName ="localhost";
$dbUsername = "plantManagement";
$dbPassword = "d9/niFZqt4meK]UE";
$dbName = "plant_management_system";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}