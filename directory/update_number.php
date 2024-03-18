<?php
session_start();
$number=$_POST["№_number"];
$id_hotel=$_POST["id_hotel"];
$type_number=$_POST["type_number"];
$volume_number=$_POST["volume_number"];
$price=$_POST["price"];
$id_number=$_POST["ID"];

require_once ("config.php");
 $connect = mysqli_connect($host, $user, $password, $db);
 if(!$connect) {
 die();
 }

mysqli_query($connect,"UPDATE `numbers` SET `№_number` = '$number', `id_hotel` = '$id_hotel', `volume_number` = '$volume_number', `type_number` = '$type_number', `price` = '$price' WHERE `numbers`.`ID` = '$id_number';");

header("Location: my_number.php"); 




