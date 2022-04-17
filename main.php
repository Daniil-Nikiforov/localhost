<?php
    session_start();
    if(!$_SESSION['user']){
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href = "assets/css/mainMenu.css">
    <script type="text/javascript" src="scripts/dragndrop.js" defer></script>
    <title>Главная страница</title>
</head>
<body>
    <div class="wrapper">
        <!--Меню-->
        <header>
            <div class="inner-header">
                <nav>
                    <ul>
                        <li><a class = "aMenu" href="#">Задания</a></li>
                        <li><a class = "aMenu" href="#">Песочница</a></li>
                        <li><a class = "aMenu" href="#">Информация о сайте</a></li>
                        <li><a class = "aMenu" href="#">Профиль</a></li>
                        <li><a class = "aMenu" href="includes/logout.php">Выход</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!--Панель элементов-->
        <div class="container row">
            <section class="sidebar1">
                <div class="inner-sidebar1">
                    <div class="buttons">
                        <div id="inner-buttons">

                        </div>
                    </div>
                </div>
            </section>
            <!--Создатель схем-->
            <section class="content">
                <div class="inner-content">

                </div>
            </section>
            <!--Статистика-->
            <section class="sidebar2">
                <div class="inner-sidebar2">

                </div>
            </section>
        </div>
    </div>

    
</body>
</html>