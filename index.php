<?php
    session_start();
    if(isset($_SESSION['user'])){
        header('Location: main.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href = "assets/css/main.css">
    <title>Авторизация</title>
</head>
<body>
    <form action = "includes/signin.php" method = "post" enctype="multipart/form-data">
        <label>Логин</label>
        <input name = "login" type = "text" placeholder = "Введите логин">
        <label>Пароль</label>
        <input name = "password" type = "password" placeholder = "Введите пароль">
        <button type = "submit">Войти</button>
        <p>
            <a style="display:block; text-align:center; font-size:18px" href="register.php">Регистрация</a>
        </p>

        <?php
            if(isset($_SESSION['message'])){
                echo '<p class="msg">' . $_SESSION['message'] . '</p>';
            }
            unset($_SESSION['message']);
        ?>
        
    </form>
</body>
</html>