<?php
session_start();
$country=$_POST["country"];
$title_tour=$_POST["title_tour"];
$price=$_POST["price"];
$id_tour=$_POST["ID"];
require_once ("config.php");
 $connect = mysqli_connect($host, $user, $password, $db);
 if(!$connect) {
 die();
 }

mysqli_query($connect,"UPDATE `tour` SET `country` = '$country', `title_tour` = '$title_tour', `price` = '$price' WHERE `tour`.`ID` = $id_tour;");

header("Location: my_tour.php"); 




