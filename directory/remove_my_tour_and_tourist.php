<?php
session_start();
$id_tour_and_tourist=$_POST["id_tour_and_tourist"];

require_once ("config.php");
 $connect = mysqli_connect($host, $user, $password, $db);
 if(!$connect) {
 die();
 }

mysqli_query($connect,"DELETE FROM `tours_and_tourists` WHERE `tours_and_tourists`.`id` = $id_tour_and_tourist");

header("Location: my_tour_and_tourist.php"); 

