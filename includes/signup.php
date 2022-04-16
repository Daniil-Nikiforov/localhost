<?php
    session_start();
    require_once 'connect.php';
    
    $fio = $_POST['fio'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];

    
    if($password === $passwordConfirm){
        $path = 'uploads/'.time().$_FILES['icon']['name'];
        if(!move_uploaded_file($_FILES['icon']['tmp_name'], '../'. $path)){
            $_SESSION['message'] = "Ошибка при загрузке изображения";
            header('Location: ../register.php');
        }
        mysqli_query($connect,"INSERT INTO `user` (`id`, `fio`, `login`, `email`, `password`, `icon`) VALUES (NULL, '$fio', '$login', '$email', '$password', '$path')");
        $_SESSION['message'] = "Регистрация прошла успешно";
        header('Location: ../index.php');
    }
    else{
        $_SESSION['message'] = "Пароли не совпадают";
        header('Location: ../register.php');
    }
?>