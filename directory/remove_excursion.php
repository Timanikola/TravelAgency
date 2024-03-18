<?php
session_start();
$id_excursion=$_POST["ID"];

require_once ("config.php");
 $connect = mysqli_connect($host, $user, $password, $db);
 if(!$connect) {
 die();
 }

mysqli_query($connect,"DELETE FROM `excursions` WHERE `excursions`.`id` = $id_excursion");

header("Location: my_excursion.php"); 

