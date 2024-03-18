<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>query4-1</title>
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

             $id_tourist=$_POST["choise_tourist"];
             
             


                $queryResult= mysqli_query($connect,"SELECT COUNT(*) AS num_visits  FROM tours_and_tourists WHERE Id_tourist = '$id_tourist';");
                $queryResultToArray= mysqli_fetch_array($queryResult,MYSQLI_ASSOC);
                $visits_count=$queryResultToArray['num_visits'];
                echo"<p class='discriptionCard'>этот турист посетил страну: $visits_count раз</p>";

             ?>
                
               <div class="post"> 
                    <p class='discriptionCard'>даты прибытия:</p>
               <?php 
                $queryResult= mysqli_query($connect,"SELECT`arrival`, `departure` FROM tours_and_tourists WHERE Id_tourist = '$id_tourist';");
                while( $queryResultToArray= mysqli_fetch_array($queryResult,MYSQLI_ASSOC)){
                    $arrival=$queryResultToArray['arrival'];
                    $departure=$queryResultToArray['departure'];
                    echo "<div class='post'>
                    дата прибытия
                    $arrival
                    </div>";
                    echo "<div class='post'>
                    дата убытия
                    $departure
                    </div>";
                }
                ?>
                </div>

                <div class="post">
                    <p class='discriptionCard'>посещенные гостиницы <br></p>
                <?php
                $queryResult= mysqli_query($connect,"SELECT hotels.title FROM tours_and_tourists JOIN hotels ON tours_and_tourists.id_hotel = hotels.ID WHERE Id_tourist = '$id_tourist';");
                while( $queryResultToArray= mysqli_fetch_array($queryResult,MYSQLI_ASSOC)){
                    $hotels_title=$queryResultToArray['title'];
                    
                    echo "<div class='discriptionCard'>
                    
                    $hotels_title
                    </div>";
                }
                
                    ?>
                </div>
                <div class="post">
                    <p class='discriptionCard'>посещенные экскурсии <br></p>
                <?php
                $queryResult= mysqli_query($connect,"SELECT excursions.name_excursions, excursions.ID FROM tour_and_excursions JOIN excursions ON tour_and_excursions.id_excursions = excursions.ID WHERE tour_and_excursions.tours_and_tourists IN (SELECT id FROM tours_and_tourists WHERE Id_tourist IN ('$id_tourist'));");
                while( $queryResultToArray= mysqli_fetch_array($queryResult,MYSQLI_ASSOC)){
                    $name_excursions=$queryResultToArray['name_excursions'];
                    $ID_excursions=$queryResultToArray['ID'];
                    
                    echo "<div class='discriptionCard'>
                    $ID_excursions
                    $name_excursions
                    </div>";
                }
                
                    ?>
                </div>
                 
        </div>
       
    </main>
</body>
</html>