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
                    <div class="elements">
                        <div id="inner-elements">
                            <div draggable="true" onClick="createCopy(1)" class="element" id="ePitanie" style="background-size: 100% 100%; background-image:url(uploads/Block.png);  background-position: center center;"  alt="">
                                <div class="leftSide"></div>
                                <div class="rightSide"></div>
                            </div>
                            <div draggable="true" onClick="createCopy(2)" class="element" id="eResistor" style="background-size: 100% 100%; background-image:url(uploads/Resistor.png);  background-position: center center;"  alt="">
                                <div class="leftSide"></div>
                                <div class="rightSide"></div>
                            </div>
                            <div draggable="true" onClick="createCopy(3)" class="element" id="eButton" style="background-size: 100% 100%; background-image:url(uploads/Button.png);  background-position: center center;"  alt="">
                                <div class="leftSide"></div>
                                <div class="rightSide"></div>
                            </div>
                            <div draggable="true" onClick="createCopy(4)" class="element" id="eCondensator" style="background-size: 100% 100%; background-image:url(uploads/Condensator.png);  background-position: center center;"  alt="">
                                <div class="leftSide"></div>
                                <div class="rightSide"></div>
                            </div>
                            <div draggable="true" onClick="createCopy(5)" class="element" id="eSvetDiod" style="background-size: 100% 100%; background-image:url(uploads/SvetDiod.png);  background-position: center center;"  alt="">
                                <div class="leftSide"></div>
                                <div class="rightSide"></div>
                            </div>
                            <div draggable="true" onClick="createCopy(6)" class="element" id="eTransistor1" style="background-size: 100% 100%; background-image:url(uploads/Transistor1.png);  background-position: center center;"  alt="">
                                <div class="leftSide"></div>
                                <div class="rightSide"></div>
                            </div>
                            <div draggable="true" onClick="createCopy(7)" class="element" id="eTransistor2" style="background-size: 100% 100%; background-image:url(uploads/Transistor2.png);  background-position: center center;"  alt="">
                                <div class="leftSide"></div>
                                <div class="rightSide"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Создатель схем, Работаю тут-->
            <section class="content row">
                <div id="inner-content">
                    <canvas id="canvas"></canvas>
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

<script type="text/javascript" src="scripts/dragndrop.js" defer></script>
</body>
</html>