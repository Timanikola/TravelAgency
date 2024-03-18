<?php
session_start();
$name_excursions=$_POST["name_excursions"];
$price=$_POST["price"];
$date_excursionz=$_POST["date_excursionz"];
$id_excursion=$_POST["ID"];
require_once ("config.php");
 $connect = mysqli_connect($host, $user, $password, $db);
 if(!$connect) {
 die();
 }

mysqli_query($connect,"UPDATE `excursions` SET `name_excursions` = '$name_excursions', `date_excursionz` = '$date_excursionz', `price` = '$price' WHERE `excursions`.`ID` = $id_excursion;");

header("Location: my_excursion.php"); 




