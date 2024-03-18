<?php
session_start();
$name_excursions=$_POST["name_excursions"];
$price=$_POST["price"];
$date_excursionz=$_POST["date_excursionz"];

require_once ("config.php");
 $connect = mysqli_connect($host, $user, $password, $db);
 if(!$connect) {
 die();
 }

mysqli_query($connect,"INSERT INTO `excursions` (`ID`, `name_excursions`, `date_excursionz`, `price`) VALUES (NULL, '$name_excursions', '$date_excursionz', '$price');");

header("Location: index.php"); 




