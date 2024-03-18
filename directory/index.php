<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>directory</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <header>
 <div class="headerH1">
    <h1>Панель администратора</h1>
 </div>   
 
 </header>
 <?php 
 require_once ("config.php");
 $connect = mysqli_connect($host, $user, $password, $db);
 if(!$connect) {
 die();
 }
 ?> 
 <main>
    <div class="mainDiv">
    <div class="formCard">
        <a href="my_tourist.php"><p>Список туристов</p></a>        
        <a href="my_tour_and_tourist.php"><p>Список туров и туристов</p></a>
        <a href="my_tour.php"><p>Список туров</p></a>
        <a href="my_excursion.php"><p>Список экскурсий</p></a>
        <a href="my_hotel.php"><p>Список отелей</p></a>
        <a href="my_number.php"><p>Список номеров</p></a>
        <a href="my_tourist_and_excursion.php"><p>Список туристов, которые едут на экскурсии</p></a>
        <a href="query/query.php"><p>запросы из тз</p></a>
        
    </div>




    <div class="formCard">
    <form action="add_tourist.php" method="post">
        <p>Заполните данные Туриста</p>        
        <input required type="text" name="surname" placeholder="Фамилия"><br>
        <input required type="text" name="name" placeholder="Имя"><br>       
        <input required type="text" name="patronymic" placeholder="Отчество"><br>
        <input required type="number" name="old" placeholder="Возраст"><br>
        <input required type="text" name="passport_data" placeholder="Данные паспорта"><br>
        <p>Пол</p>
            <label for="g0">жен</label>
            <input type="radio" name="gender" id="g0" value="0" checked>
            <label for="g1">муж</label>
            <input type="radio" name="gender" id="g1" value="1"><br><br>

            <input type="submit" value="Добавить">
    </form>
    </div>




    <div class="tour_and_tourist">
    <form action="add_tour_and_tourist.php" method="post">
        <p>Заполните данные о Туре и туристе</p>
        <label for="">фио туриста</label><br>
        <select name="id_tourist" id="">
        <?php
            $queryResultTourist= mysqli_query($connect,"SELECT * FROM `tourist`;");
            $queryResultToArrayTourist= mysqli_fetch_all($queryResultTourist,MYSQLI_ASSOC);
            foreach ($queryResultToArrayTourist as $key => $value) {
                echo "<option value='$value[id]'>$value[surname],$value[name],$value[patronymic]</option>";
            }
            ?>
         </select><br>
         <label for="">страна назначения</label><br>
         <select name="id_tour" id="">
        <?php
            $queryResultTour= mysqli_query($connect,"SELECT * FROM `tour`;");
            $queryResultToArrayTour= mysqli_fetch_all($queryResultTour,MYSQLI_ASSOC);
            foreach ($queryResultToArrayTour as $key => $value) {
                echo "<option value='$value[ID]'>$value[country],$value[ID]</option>";
            }
            ?>
         </select><br>
         <label for="">список отелей</label><br>
         <select name="id_hotel" id="">
        <?php
            $queryResultHotel= mysqli_query($connect,"SELECT * FROM `hotels`;");
            $queryResultToArrayHotel= mysqli_fetch_all($queryResultHotel,MYSQLI_ASSOC);
            foreach ($queryResultToArrayHotel as $key => $value) {
                echo "<option value='$value[ID]'>$value[ID],$value[title],$value[country_hotel]</option>";
            }
            ?>
         </select><br>
         <label for="">список номеров</label><br>
         <select name="id_number" id="">
        <?php
            $queryResultHotel= mysqli_query($connect,"SELECT * FROM `numbers`;");
            $queryResultToArrayHotel= mysqli_fetch_all($queryResultHotel,MYSQLI_ASSOC);
            foreach ($queryResultToArrayHotel as $key => $value) {
                echo "<option value='$value[ID]'>Номер $value[№_number],$value[id_hotel],класс номера $value[type_number],вместимость$value[volume_number]</option>";
            }
            ?>
         </select><br>
        <label for="date1">дата прибытия</label><br>
        <input type="date" name="arrival"><br>
        <label for="date1">дата убытия</label><br>
        <input type="date" name="departure"><br><br>
        
            <input type="submit" value="Добавить">
    </form>
    </div>





    <div class="formCard">
    <form action="add_tour_and_excursion.php" method="post">
        <p>Заполните данные о туре и экскурсии</p>
        <label for="">выберите туриста, который поедет</label><br>
         <select name="choice_tourist" id="">
        <?php
            $queryResultTours_and_tourists= mysqli_query($connect,"SELECT * FROM `tours_and_tourists`;");
            $queryResultToArrayTours_and_tourists= mysqli_fetch_all($queryResultTours_and_tourists,MYSQLI_ASSOC);
            foreach ($queryResultToArrayTours_and_tourists as $key => $value) {
                echo "<option value='$value[id]'>id тура и туриста:$value[id], id туриста:$value[id_tourist]</option>";
            }
            ?>
         </select><br><br>
        <label for="">выберите экскурсию</label><br>
         <select name="choice_excursion" id="">
        <?php
            $queryResultExcursion= mysqli_query($connect,"SELECT * FROM `excursions`;");
            $queryResultToArrayExcursion= mysqli_fetch_all($queryResultExcursion,MYSQLI_ASSOC);
            foreach ($queryResultToArrayExcursion as $key => $value) {
                echo "<option value='$value[ID]'>$value[ID],$value[name_excursions]</option>";
            }
            ?>
         </select><br><br>
        
        <br>
            <input type="submit" value="Добавить">
    </form>
    </div>





    <div class="formCard">
    <form action="add_tour.php" method="post">
        <p>Заполните данные о Туре</p>
        <input required type="text" name="country" placeholder="Страна назначения"><br>
        <input required type="text" name="title_tour" placeholder="Введите название тура"><br>       
        <input required type="text" name="price" placeholder="Цена тура"><br><br>
            <input type="submit" value="Добавить">
    </form>
    </div>





    <div class="formCard">
    <form action="add_excursion.php" method="post">
        <p>Заполните данные о экскурсии</p>        
        <input required type="text" name="name_excursions" placeholder="Название экскурсии"><br>
        <input required type="number" name="price" placeholder="Цена экскурсии"><br>
        <input required type="date" name="date_excursionz"><br><br>
            <input type="submit" value="Добавить">
    </form>
    </div>





    <div class="formCard">
    <form action="add_hotel.php" method="post">
        <p>Заполните данные о отеле</p>        
        <input required type="text" name="title" placeholder="Название отеля"><br>
        <label for="">страна отеля</label><br>
         <select name="country_hotel" id="">
        <?php
            $queryResultHotel= mysqli_query($connect,"SELECT * FROM `tour`;");
            $queryResultToArrayHotel= mysqli_fetch_all($queryResultHotel,MYSQLI_ASSOC);
            foreach ($queryResultToArrayHotel as $key => $value) {
                echo "<option value='$value[ID]'>$value[ID],$value[country]</option>";
            }
            ?>
         </select><br><br>
            <input type="submit" value="Добавить">
    </form>
    </div>




    <div class="formCard">
    <form action="add_number.php" method="post">
        <p>Заполните данные о номере</p>        
        <input required type="number" name="number" placeholder="№номера"><br>
        <label for="">отеля номера</label><br>
         <select name="hotel_number" id="">
        <?php
            $queryResultNumber= mysqli_query($connect,"SELECT * FROM `hotels`;");
            $queryResultToArrayNumber= mysqli_fetch_all($queryResultNumber,MYSQLI_ASSOC);
            foreach ($queryResultToArrayNumber as $key => $value) {
                echo "<option value='$value[ID]'>$value[ID],$value[title]</option>";
            }
            ?>
         </select><br><br>
         <label for="">выберите тип номера</label><br>
         <select name="type_number" id="">
        <?php
            $queryResultType= mysqli_query($connect,"SELECT * FROM `type_number`;");
            $queryResultToArrayType= mysqli_fetch_all($queryResultType,MYSQLI_ASSOC);
            foreach ($queryResultToArrayType as $key => $value) {
                echo "<option value='$value[ID]'>$value[ID],$value[type_number]</option>";
            }
            ?>
         </select><br><br>
         <input required type="number" name="volume_number" placeholder="Вместимость номера"><br>
         <input required type="number" name="price" placeholder="Цена номера"><br>
            <input type="submit" value="Добавить">
    </form>
    </div>
    
    </div>
 </main>
 <footer>
    <!-- <div class="content_footer"><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo illum qui molestias cupiditate quidem laudantium quam recusandae est! Modi, nihil fuga! Quos, ea repellendus ut harum nisi atque quam odio laborum dignissimos. Dolorum officiis corrupti sit id quisquam eum magnam debitis deleniti, iure atque. Aliquam esse alias autem nesciunt iusto mollitia magni ad consequatur inventore officiis quia dolores debitis quisquam deleniti, ex dolore. Eligendi eveniet quaerat veritatis voluptates atque saepe amet necessitatibus ex quas ratione obcaecati quia non debitis ullam, adipisci aperiam quasi minus tenetur eaque. Aperiam, laboriosam quam quisquam maxime natus rem amet autem. Modi, minima neque. Perspiciatis, sunt!</p></div>    -->
 </footer>   
</body>
</html>