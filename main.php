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
<body onload="main()">
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
                            <!--
                            <button id="element 1">
                                1
                            </button>
                            <button id="element 2">
                                2
                            </button>
                            <button id="element 3">
                                3
                            </button>
                            <button id="element 4">
                                4
                            </button>
                            <button id="element 5">
                                5
                            </button>
                            <button id="element 6">
                                6
                            </button>
                            <button id="element 7">
                                7
                            </button>
                            <button id="element 8">
                                8
                            </button>
                            -->
                        </div>
                    </div>
                </div>
            </section>
            <!--Создатель схем, Работаю тут-->
            <section class="content">
                <div class="myCanvas row">
                    
                </div>
            </section>
            <!--Статистика-->
            <section class="sidebar2">
                <div class="inner-sidebar2">
                    
                </div>
            </section>
            <!--Статистика 2   -->
        </div>
    </div>

    
</body>
</html>