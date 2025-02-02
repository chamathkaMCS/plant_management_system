<?php
$serverName ="localhost";
$dbUsername = "chamathka";
$dbPassword = "O8g(Ttj2!1i[YU*K";
$dbName = "plant_management_system";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}