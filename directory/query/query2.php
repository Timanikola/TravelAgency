<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>query2</title>
    <link rel="stylesheet" href="../css/style_standart.css">
</head>
<body>
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
                $queryResult= mysqli_query($connect,"SELECT tourist.surname, tourist.name, tourist.patronymic, hotels.title, numbers.№_number 
                FROM tours_and_tourists 
                JOIN tourist 
                ON tours_and_tourists.id_tourist = tourist.id 
                JOIN hotels 
                ON tours_and_tourists.id_hotel = hotels.ID 
                JOIN numbers 
                ON tours_and_tourists.id_number = numbers.ID;");
                
                $queryResultToArray= mysqli_fetch_all($queryResult,MYSQLI_ASSOC);

                // print_r($queryResultToArray);

                for ($i=0; $i < count($queryResultToArray) ; $i++) { 
                    $info[$i]=$queryResultToArray[$i];
                    
                    foreach ($info[$i] as $key => $value) {
                        
                        echo"
                        <div class='post'>
                        <p class='discriptionCard'>
                        $value;
                        </p></div>";    
                    }
                }
            ?>
    </div>
</body>
</html>





