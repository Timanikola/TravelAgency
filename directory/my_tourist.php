<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>мои туристы</title>
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
                $queryResult= mysqli_query($connect,"SELECT * FROM `tourist`;");
                while( $queryResultToArray= mysqli_fetch_array($queryResult,MYSQLI_ASSOC)){
                    if ($queryResultToArray['gender']==0) {
                        $gender="женский";
                    }
                    else {
                        $gender="мужской";
                    }
                    echo "<div class='post'>
                          <form class='forms' action='update_tourist.php' method='post'>
                          <input type='hidden' name='id_tourist' value='$queryResultToArray[id]'>
                          <input type='text' class='discriptionCard' name='name' value='$queryResultToArray[name]'>
                          <input type='text' class='discriptionCard' name='surname' value='$queryResultToArray[surname]'>
                          <input type='text' class='discriptionCard' name='patronymic' value='$queryResultToArray[patronymic]'>
                          <input type='number' class='discriptionCard' name='old' value='$queryResultToArray[old]'>
                          <input type='text' class='discriptionCard' name='passport_data' value='$queryResultToArray[passport_data]'>
                          <label><p class='discriptionCard'>уникальный номер туриста:$queryResultToArray[id]</p></label><br>
                          <label><p class='discriptionCard'>пол: $gender</p></label>
                          <div class='buttonCards'>
                          <input class='custom-btn btn-14' type='submit' value='сохранить изменения'>                          
                          </div>
                          </form>
                          <form  action='remove_tourist.php' method='post'>
                          <input type='hidden' name='id_tourist' value='$queryResultToArray[id]'>
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