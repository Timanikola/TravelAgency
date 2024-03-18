<?php
session_start();
$id_tour=$_POST["ID"];

require_once ("config.php");
 $connect = mysqli_connect($host, $user, $password, $db);
 if(!$connect) {
 die();
 }

mysqli_query($connect,"DELETE FROM `tour` WHERE `tour`.`id` = $id_tour");

header("Location: my_tour.php"); 

