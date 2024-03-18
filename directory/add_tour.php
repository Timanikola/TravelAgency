<?php
session_start();
$country=$_POST["country"];
$title_tour=$_POST["title_tour"];
$price=$_POST["price"];

require_once ("config.php");
 $connect = mysqli_connect($host, $user, $password, $db);
 if(!$connect) {
 die();
 }

mysqli_query($connect,"INSERT INTO `tour` (`ID`, `country`, `title_tour`, `price`) VALUES (NULL, '$country', '$title_tour', '$price');");

header("Location: index.php"); 




