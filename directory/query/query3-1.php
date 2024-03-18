<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>query3-1</title>
    <link rel="stylesheet" href="../css/style_standart.css">
</head>
<body>
    <main>
        <div class="buttonBack">
        <button class="custom-btn btn-14" onclick="document.location='query.php'">Назад</button>
        </div>
        <div class="myAnimal">
            <?php
            session_start();
            require_once ("../config.php");
             $connect = mysqli_connect($host, $user, $password, $db);
             if(!$connect) {
             die();
             }

             $country=$_POST["country"];
             $date1=$_POST["date1"];
             $date2=$_POST["date2"];


                $queryResult= mysqli_query($connect,"SELECT COUNT(*) AS tourists_count FROM tours_and_tourists WHERE id_tour = '$country' AND arrival BETWEEN '$date1' AND '$date2';");
                $queryResultToArray= mysqli_fetch_array($queryResult,MYSQLI_ASSOC);

                // print_r($queryResultToArray['tourists_count']);

                $tourists_count=$queryResultToArray['tourists_count'];
                
                echo"<p class='discriptionCard'>за этот периуд в стране побывало: $tourists_count туристов</p>";
                
            ?>
                 
        </div>
       
    </main>
</body>
</html>