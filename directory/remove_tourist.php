<?php
session_start();
$id_tourist=$_POST["id_tourist"];

require_once ("config.php");
 $connect = mysqli_connect($host, $user, $password, $db);
 if(!$connect) {
 die();
 }

mysqli_query($connect,"DELETE FROM `tourist` WHERE `tourist`.`id` = $id_tourist");

header("Location: my_tourist.php"); 

