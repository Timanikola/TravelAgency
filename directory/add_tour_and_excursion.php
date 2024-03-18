<?php
session_start();
$choice_tourist=$_POST["choice_tourist"];
$choice_excursion=$_POST["choice_excursion"];

require_once ("config.php");
 $connect = mysqli_connect($host, $user, $password, $db);
 if(!$connect) {
 die();
 }

mysqli_query($connect,"INSERT INTO `tour_and_excursions` (`ID`, `id_excursions`, `tours_and_tourists`) VALUES (NULL, '$choice_excursion', '$choice_tourist');");

header("Location: index.php"); 




