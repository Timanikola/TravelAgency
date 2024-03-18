<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>query9</title>
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
                $queryResult= mysqli_query($connect,"SELECT tour.title_tour, COUNT(tours_and_tourists.id_tour) AS popularity FROM tours_and_tourists JOIN tour ON tours_and_tourists.id_tour = tour.ID GROUP BY tours_and_tourists.id_tour ORDER BY popularity DESC;");
                


                while( $queryResultToArray= mysqli_fetch_array($queryResult,MYSQLI_ASSOC)){
                    $popularity=$queryResultToArray['popularity'];
                    $name_tour=$queryResultToArray['title_tour'];
                    echo "<div class=''>
                    $name_tour :
                    $popularity
                          </div>";
                    }           
            ?>
        </div>
    </div>
</body>
</html>





