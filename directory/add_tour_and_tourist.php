<?php
session_start();
// $id_tour_and_excursion=$_POST["id_tour_and_excursion"];
$id_tourist=$_POST["id_tourist"];
$id_hotel=$_POST["id_hotel"];
$id_number=$_POST["id_number"];
$arrival=$_POST["arrival"];
$departure=$_POST["departure"];
// $tour_price=$_POST["tour_price"];
$id_tour=$_POST["id_tour"];


require_once ("config.php");
 $connect = mysqli_connect($host, $user, $password, $db);
 if(!$connect) {
 die();
 }

mysqli_query($connect,"INSERT INTO `tours_and_tourists` (`id`, `id_tourist`, `id_hotel`, `id_number`, `arrival`, `departure`, `id_tour`) VALUES (NULL, '$id_tourist', '$id_hotel', '$id_number', '$arrival', '$departure', '$id_tour');");

header("Location: index.php"); 




