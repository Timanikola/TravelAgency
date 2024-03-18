<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>query10</title>
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
                $queryResult= mysqli_query($connect,"SELECT hotels.title, numbers.№_number, COUNT(*) AS popularity FROM tours_and_tourists INNER JOIN hotels ON tours_and_tourists.id_hotel = hotels.ID INNER JOIN numbers ON tours_and_tourists.id_number = numbers.ID GROUP BY hotels.title, numbers.№_number ORDER BY popularity DESC;");
                


                while( $queryResultToArray= mysqli_fetch_array($queryResult,MYSQLI_ASSOC)){
                    $popularity=$queryResultToArray['popularity'];
                    $title=$queryResultToArray['title'];
                    $№_number=$queryResultToArray['№_number'];
                    echo "<div class=''>
                    $title :
                    $№_number 
                    номер в топе $popularity 
                          </div>";
                    }           
            ?>
        </div>
    </div>
</body>
</html>





