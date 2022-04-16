<?php
    $connect = mysqli_connect('localhost','root','','fizika');
    
    if(!$connect){
        die('Error connect to DB');
    }
?>