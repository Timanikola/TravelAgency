<?php
session_start();
$id_number=$_POST["ID"];

require_once ("config.php");
 $connect = mysqli_connect($host, $user, $password, $db);
 if(!$connect) {
 die();
 }

mysqli_query($connect,"DELETE FROM `numbers` WHERE `numbers`.`id` = $id_number");

header("Location: my_number.php"); 

