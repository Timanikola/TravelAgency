<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>query5-1</title>
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


                $queryResult= mysqli_query($connect,"SELECT hotels.title, COUNT(tours_and_tourists.id_number) AS occupied_rooms, COUNT(DISTINCT tours_and_tourists.id_tourist) AS guests_count FROM hotels JOIN numbers ON hotels.ID = numbers.id_hotel JOIN tours_and_tourists ON numbers.ID = tours_and_tourists.id_number WHERE STR_TO_DATE(tours_and_tourists.arrival, '%Y-%m-%d') <= '$date2' AND STR_TO_DATE(tours_and_tourists.departure, '%Y-%m-%d') >= '$date1' GROUP BY hotels.title;");
                // $queryResultToArray= mysqli_fetch_array($queryResult,MYSQLI_ASSOC);

                // print_r($queryResultToArray['tourists_count']);
                
                
                
                // echo"<p class='discriptionCard'>за этот периуд в стране побывало: $tourists_count туристов</p>";
                while( $queryResultToArray= mysqli_fetch_array($queryResult,MYSQLI_ASSOC)){
                    $title=$queryResultToArray['title'];
                    $occupied_rooms=$queryResultToArray['occupied_rooms'];
                    $guests_count=$queryResultToArray['guests_count'];
                    echo "<div class='post'>
                          $title<br>
                          Занятые номера: $occupied_rooms<br>
                          Количество гостей: $guests_count
                          </div>";
                    }           
                
            ?>
                 
        </div>
       
    </main>
</body>
</html>