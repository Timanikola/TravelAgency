<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>query3</title>
</head>
<body>
<div class="formCard">
    <form action="query3-1.php" method="post">
        <p>Заполните о стране и периуде</p>

        <label for="">выберите страну</label><br>
        <select name="country" id="">
        <?php
             session_start();
             require_once ("../config.php");
              $connect = mysqli_connect($host, $user, $password, $db);
              if(!$connect) {
              die();
              }

              $queryResultHotel= mysqli_query($connect,"SELECT * FROM `tour`;");
              $queryResultToArrayHotel= mysqli_fetch_all($queryResultHotel,MYSQLI_ASSOC);
              foreach ($queryResultToArrayHotel as $key => $value) {
                  echo "<option value='$value[ID]'>$value[ID],$value[country]</option>";
              }
            ?>
         </select><br><br>
        <!-- <input required type="number" name="country" placeholder="Страна назначения"><br> -->
        <input required type="date" name="date1" placeholder="введите первую дату"><br>       
        <input required type="date" name="date2" placeholder="введите вторую дату"><br><br>
        <input type="submit" value="проверить">
    </form>
    </div>
</body>
</html>





