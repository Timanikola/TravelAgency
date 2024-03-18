<?php
session_start();
$title=$_POST["title"];
$country_hotel=$_POST["country_hotel"];

require_once ("config.php");
 $connect = mysqli_connect($host, $user, $password, $db);
 if(!$connect) {
 die();
 }

mysqli_query($connect,"INSERT INTO `hotels` (`ID`, `title`, `country_hotel`) VALUES (NULL, '$title', '$country_hotel');");

header("Location: index.php"); 




