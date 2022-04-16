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
    <title>Регистрация</title>
</head>
<body>
    <form action = "includes/signup.php" method = "post" enctype = "multipart/form-data">
        <label>ФИО</label>
        <input name="fio" type = "text" placeholder = "Введите ваше ФИО">
        <label>Логин</label>
        <input name="login" type = "text" placeholder = "Введите логин">
        <label>Почта</label>
        <input name="email" type = "email" placeholder = "Введите адрес электронной почты">
        <label>Изображение профиля</label>
        <input name="icon" type = "file">
        <label>Пароль</label>
        <input name="password" type = "password" placeholder = "Введите пароль">
        <label>Подтверждение пароля</label>
        <input name="passwordConfirm" type = "password" placeholder = "Подтвердите пароль">
        <button type = "submit" >Зарегистрироваться</button>
        <p>
            <a style="display:block; text-align:center; font-size:18px" href="index.php">Уже есть аккаунт</a>
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