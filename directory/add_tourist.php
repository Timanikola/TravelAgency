<?php
session_start();
$name=$_POST["name"];
$surname=$_POST["surname"];
$patronymic=$_POST["patronymic"];
$gender=$_POST["gender"];
$old=$_POST["old"];
$passport_data=$_POST["passport_data"];


require_once ("config.php");
 $connect = mysqli_connect($host, $user, $password, $db);
 if(!$connect) {
 die();
 }

mysqli_query($connect,"INSERT INTO `tourist` (`id`, `name`, `surname`, `patronymic`, `gender`, `old`, `passport_data`) VALUES (NULL, '$name', '$surname', '$patronymic', '$gender', '$old', '$passport_data');");

header("Location: index.php"); 




