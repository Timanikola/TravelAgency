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

             
             $choice_tour_and_tourist=$_POST["choice_tour_and_tourist"];
             


                $queryResult= mysqli_query($connect,"SELECT SUM(IFNULL(n.price, 0) + IFNULL(t.price, 0) + IFNULL(e.price, 0)) as total_price 
                FROM tours_and_tourists tt 
                LEFT JOIN numbers n ON tt.id_number = n.ID 
                LEFT JOIN tour t ON tt.id_tour = t.ID 
                LEFT JOIN tour_and_excursions te ON tt.id = te.tours_and_tourists 
                LEFT JOIN excursions e ON te.id_excursions = e.ID 
                WHERE tt.id = $choice_tour_and_tourist; ");



                $queryResultToArray= mysqli_fetch_array($queryResult,MYSQLI_ASSOC);
                $total_price=$queryResultToArray['total_price'];

                echo "<div class='post'>
                    сумма тура, номера, экскурсии: <br>
                    $total_price<br>
                          </div>";
            ?>
                 
        </div>
       
    </main>
</body>
</html>