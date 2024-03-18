<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>query4</title>
    <link rel="stylesheet" href="../css/style_standart.css">
</head>
<body>
        <div class="buttonBack">
            <button class="custom-btn btn-14" onclick="document.location='query.php'">Назад</button>
        </div>
<div class="myAnimal">
    <form action="query4-1.php" method="post">
        <label for="">выберите туриста</label><br>
        <select name="choise_tourist" id="">
        <?php
             session_start();
             require_once ("../config.php");
              $connect = mysqli_connect($host, $user, $password, $db);
              if(!$connect) {
              die();
              }

              $queryResultHotel= mysqli_query($connect,"SELECT tourist.surname, tourist.name, tourist.patronymic, tours_and_tourists.id_tourist, tours_and_tourists.id_tour 
              FROM tours_and_tourists 
              JOIN tourist 
              ON tours_and_tourists.id_tourist = tourist.id;");
              
              $queryResultToArrayHotel= mysqli_fetch_all($queryResultHotel,MYSQLI_ASSOC);
              foreach ($queryResultToArrayHotel as $key => $value) {
                  echo "<option value='$value[id_tourist]'>$value[id_tourist],$value[surname],$value[name],$value[patronymic], id_tour:$value[id_tour]</option>";
              }
            ?>
         </select><br><br>
        <input type="submit" value="найти">
    </form>
    </div>
</body>
</html>





