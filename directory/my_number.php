<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>мои номера</title>
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
                $queryResult= mysqli_query($connect,"SELECT * FROM `numbers`;");
                while( $queryResultToArray= mysqli_fetch_array($queryResult,MYSQLI_ASSOC)){
                    echo "<div class='post'>
                          <form class='forms' action='update_number.php' method='post'>
                          <input type='hidden' name='ID' value='$queryResultToArray[ID]'>


                          <label><h1 class='discriptionCard'>номер:</h1></label>
                          <input type='number' class='discriptionCard' name='№_number' value='$queryResultToArray[№_number]'><br>

                          
                          <label><p class='discriptionCard'>отель:</p></label>
                          <input type='number' class='discriptionCard' name='id_hotel' value='$queryResultToArray[id_hotel]'><br>
                          

                          <label><p class='discriptionCard'>вместимость:</p></label><br>
                          <input type='number' class='discriptionCard' name='volume_number' value='$queryResultToArray[volume_number]'><br>


                          <label><p class='discriptionCard'>тип номера:</p></label><br>
                          <input type='number' class='discriptionCard' name='type_number' value='$queryResultToArray[type_number]'><br>


                          <label><p class='discriptionCard'>цена номера:</p></label><br>
                          <input type='number' class='discriptionCard' name='price' value='$queryResultToArray[price]'><br>


                          <label><p class='discriptionCard'>id номера:$queryResultToArray[ID]</p></label>
                          <div class='buttonCards'>
                          <input class='custom-btn btn-14' type='submit' value='сохранить изменения'>                          
                          </div>
                          </form>
                          <form  action='remove_number.php' method='post'>
                          <input type='hidden' name='ID' value='$queryResultToArray[ID]'>
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