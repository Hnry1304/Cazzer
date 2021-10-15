<?php
    session_start();
    require_once 'autoload.php';
    require_once 'Config/database.php';


    if(isset($_GET['class'])){
        $className = $_GET['class'].'Controller';

    }else{
        echo "Ingrese un Url Valido!!!";
        exit();
    }


    if(class_exists($className)){
        $callClass = new $className();

        if(isset($_GET['function']) && method_exists($callClass, $_GET['function'])){
            $function = $_GET['function'];
            $callClass->$function();
        }else{
            echo "La Funcion no Existe!!!!";
        }
    }else{
        echo "La clase no Existe!!!";
    }