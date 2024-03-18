<?php
session_start();
$number=$_POST["number"];
$hotel_number=$_POST["hotel_number"];
$type_number=$_POST["type_number"];
$volume_number=$_POST["volume_number"];
$price=$_POST["price"];

require_once ("config.php");
 $connect = mysqli_connect($host, $user, $password, $db);
 if(!$connect) {
 die();
 }

mysqli_query($connect,"INSERT INTO `numbers` (`ID`, `№_number`, `id_hotel`, `volume_number`, `type_number`, `price`) VALUES (NULL, '$number', '$hotel_number', '$volume_number', '$type_number', '$price');");

header("Location: index.php"); 




