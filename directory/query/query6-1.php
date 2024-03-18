<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>query6-1</title>
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

             
             $date1=$_POST["date1"];
             $date2=$_POST["date2"];


                $queryResult= mysqli_query($connect,"SELECT COUNT(Id_tourist) AS total_tourists FROM tours_and_tourists INNER JOIN tour_and_excursions ON tours_and_tourists.id = tour_and_excursions.tours_and_tourists WHERE arrival >= '$date1' AND departure <= '$date2';");
                // $queryResultToArray= mysqli_fetch_array($queryResult,MYSQLI_ASSOC);

                // print_r($queryResultToArray['tourists_count']);
                
                
                
                // echo"<p class='discriptionCard'>за этот периуд в стране побывало: $tourists_count туристов</p>";
                while( $queryResultToArray= mysqli_fetch_array($queryResult,MYSQLI_ASSOC)){
                    $total_tourists=$queryResultToArray['total_tourists'];
                    
                    echo "<div class='post'>
                          
                    Туристы посетившие экскурсии в этот период <br>
                    $total_tourists
                          
                          
                          </div>";
                    }           
                
            ?>
                 
        </div>
       
    </main>
</body>
</html>