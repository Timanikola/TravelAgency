<?php
session_start();
$title=$_POST["title"];
$country_hotel=$_POST["country_hotel"];
$id_hotel=$_POST["ID"];

require_once ("config.php");
 $connect = mysqli_connect($host, $user, $password, $db);
 if(!$connect) {
 die();
 }

mysqli_query($connect,"UPDATE `hotels` SET `title` = '$title', `country_hotel` = '$country_hotel' WHERE `hotels`.`ID` = $id_hotel;");

header("Location: my_hotel.php"); 




