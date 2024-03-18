<?php
session_start();
$id_hotel=$_POST["ID"];

require_once ("config.php");
 $connect = mysqli_connect($host, $user, $password, $db);
 if(!$connect) {
 die();
 }

mysqli_query($connect,"DELETE FROM `hotels` WHERE `hotels`.`id` = '$id_hotel'");

header("Location: my_hotel.php"); 

