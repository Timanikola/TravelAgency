<?php
session_start();
$name=$_POST["name"];
$surname=$_POST["surname"];
$patronymic=$_POST["patronymic"];
$gender=$_POST["gender"];
$old=$_POST["old"];
$id_tourist=$_POST["id_tourist"];
$passport_data=$_POST["passport_data"];

require_once ("config.php");
 $connect = mysqli_connect($host, $user, $password, $db);
 if(!$connect) {
 die();
 }

mysqli_query($connect,"UPDATE `tourist` SET `name` = '$name', `surname` = '$surname', `patronymic` = '$patronymic', `old` = '$old', `passport_data`='$passport_data' WHERE `tourist`.`id` = '$id_tourist';");

header("Location: my_tourist.php"); 




