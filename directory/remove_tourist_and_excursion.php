<?php
session_start();
$id=$_POST["ID"];

require_once ("config.php");
 $connect = mysqli_connect($host, $user, $password, $db);
 if(!$connect) {
 die();
 }

mysqli_query($connect,"DELETE FROM `tour_and_excursions` WHERE `tour_and_excursions`.`id` = $id");

header("Location: my_tourist_and_excursion.php"); 

