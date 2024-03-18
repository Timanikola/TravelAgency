<?php
session_start();
$tours_and_tourists=$_POST["tours_and_tourists"];
$id_excursions=$_POST["id_excursions"];
$id_tour_and_excursions=$_POST["ID"];

require_once ("config.php");
 $connect = mysqli_connect($host, $user, $password, $db);
 if(!$connect) {
 die();
 }

mysqli_query($connect,"UPDATE `tour_and_excursions` SET `id_excursions` = '$id_excursions', `tours_and_tourists` = $tours_and_tourists WHERE `tour_and_excursions`.`ID` = '$id_tour_and_excursions';");

header("Location: my_tourist_and_excursion.php"); 




