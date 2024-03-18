<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>мои туры и туристы</title>
    <link rel="stylesheet" href="css/style_standart.css">
</head>
<body>
    <main>
        <div class="buttonBack">
        <button class="custom-btn btn-14" onclick="document.location='index.php'">Назад</button>
        </div>
        <div class="myAnimal">
            <?php
            session_start();
            require_once ("config.php");
             $connect = mysqli_connect($host, $user, $password, $db);
             if(!$connect) {
             die();
             }
                $queryResult= mysqli_query($connect,"SELECT * FROM `tours_and_tourists`;");
                while( $queryResultToArray= mysqli_fetch_array($queryResult,MYSQLI_ASSOC)){
                    echo "<div class='post'>
                          <form class='forms' action='update_my_tour_and_tourist.php' method='post'>
                          <input type='hidden' name='id' value='$queryResultToArray[id]'>
                          <label><h1 class='discriptionCard'>уникальный номер тура и туриста: $queryResultToArray[id]</h1></label><br>
                          
                          <label><p class='discriptionCard'>id туриста:</p></label><br>
                          <input type='number' class='discriptionCard' name='id_tourist' value='$queryResultToArray[id_tourist]'>

                          <label><p class='discriptionCard'>id тура:</p></label><br>
                          <input type='number' class='discriptionCard' name='id_tour' value='$queryResultToArray[id_tour]'>

                          <label><p class='discriptionCard'>id отеля:</p></label><br>
                          <input type='number' class='discriptionCard' name='id_hotel' value='$queryResultToArray[id_hotel]'>                          

                          <label><p class='discriptionCard'>id номера:</p></label><br>
                          <input type='number' class='discriptionCard' name='id_number' value='$queryResultToArray[id_number]'>

                          <label><p class='discriptionCard'>дата прибытия:</p></label><br>
                          <input type='date' class='discriptionCard' name='arrival' value='$queryResultToArray[arrival]'>

                          <label><p class='discriptionCard'>дата убытия:</p></label><br>
                          <input type='date' class='discriptionCard' name='departure' value='$queryResultToArray[departure]'>

                          <div class='buttonCards'>
                          <input class='custom-btn btn-14' type='submit' value='сохранить изменения'>                          
                          </div>
                          </form>
                          <form  action='remove_my_tour_and_tourist.php' method='post'>
                          <input type='hidden' name='id_tour_and_tourist' value='$queryResultToArray[id]'>
                          <div class='buttonCards'>
                          <input class='custom-btn btn-14' type='submit' value='удалить'>                          
                          </div>
                          </form>
                          </div>";
                    }           
            ?>
                 
        </div>
       
    </main>
</body>
</html>