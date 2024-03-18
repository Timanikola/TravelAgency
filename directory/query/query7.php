<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>query7</title>
    <link rel="stylesheet" href="../css/style_standart.css">
</head>
<body>
<div class="buttonBack">
        <button class="custom-btn btn-14" onclick="document.location='query.php'">Назад</button>
        </div>
    <div class="myAnimal">
        <div class="post">
    <?php
            session_start();
            require_once ("../config.php");
             $connect = mysqli_connect($host, $user, $password, $db);
             if(!$connect) {
             die();
             }
                $queryResult= mysqli_query($connect,"SELECT excursions.name_excursions, COUNT(tour_and_excursions.id_excursions) AS popularity FROM tour_and_excursions JOIN excursions ON tour_and_excursions.id_excursions = excursions.ID GROUP BY tour_and_excursions.id_excursions ORDER BY popularity DESC;");
                


                while( $queryResultToArray= mysqli_fetch_array($queryResult,MYSQLI_ASSOC)){
                    $popularity=$queryResultToArray['popularity'];
                    $name_excursions=$queryResultToArray['name_excursions'];
                    echo "<div class=''>
                    $name_excursions :
                    $popularity
                          </div>";
                    }           
            ?>
        </div>
    </div>
</body>
</html>





