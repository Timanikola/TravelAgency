<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>query8</title>
    <link rel="stylesheet" href="../css/style_standart.css">
</head>
<body>
<div class="formCard">
<div class="buttonBack">
            <button class="custom-btn btn-14" onclick="document.location='query.php'">Назад</button>
        </div>
        <div class="myAnimal">
    <form action="query8-1.php" method="post">
        <p>выберите id тура и туриста для расчета</p>
        
        <select name="choice_tour_and_tourist" id="">
        <?php

            require_once ("../config.php");
            $connect = mysqli_connect($host, $user, $password, $db);
            if(!$connect) {
            die();
            }

            $queryResultTours_and_tourists= mysqli_query($connect,"SELECT * FROM `tours_and_tourists`;");
            $queryResultToArrayTours_and_tourists= mysqli_fetch_all($queryResultTours_and_tourists,MYSQLI_ASSOC);
            foreach ($queryResultToArrayTours_and_tourists as $key => $value) {
                echo "<option value='$value[id]'>id тура и туриста:$value[id], id туриста:$value[id_tourist]</option>";
            }
            ?>
         </select><br><br>        
        
        <input type="submit" value="проверить">
    </form>
    </div>
    </div>
</body>
</html>





