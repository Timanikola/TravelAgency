<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>мои экскурсии</title>
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
                $queryResult= mysqli_query($connect,"SELECT * FROM `excursions`;");
                while( $queryResultToArray= mysqli_fetch_array($queryResult,MYSQLI_ASSOC)){
                    echo "<div class='post'>
                          <form class='forms' action='update_excursion.php' method='post'>
                          <input type='hidden' name='ID' value='$queryResultToArray[ID]'>

                          <label><h1 class='discriptionCard'>название экскурсии:</h1></label>
                          <input type='text' class='discriptionCard' name='name_excursions' value='$queryResultToArray[name_excursions]'><br>

                          <label><h1 class='discriptionCard'>дата экскурсии:</h1></label>
                          <input type='date' class='discriptionCard' name='date_excursionz' value='$queryResultToArray[date_excursionz]'><br>
                          
                          <label><p class='discriptionCard'>цена экскурсии:</p></label><br>
                          <input type='number' class='discriptionCard' name='price' value='$queryResultToArray[price]'><br>

                          <label><p class='discriptionCard'>id экскурсии:$queryResultToArray[ID]</p></label>
                          <div class='buttonCards'>
                          <input class='custom-btn btn-14' type='submit' value='сохранить изменения'>                          
                          </div>
                          </form>
                          <form  action='remove_excursion.php' method='post'>
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