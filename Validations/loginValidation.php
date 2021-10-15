<?php
    $username = $_POST['username'];
    $contrasena = $_POST['password'];

    if(empty($username) || empty($contrasena)){
        header('Location: index.php?class=views&function=viewLoginPage');
    }

    