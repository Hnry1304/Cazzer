<?php
    session_start();
    require_once 'autoload.php';
    require_once 'Config/parametres.php';
    require_once 'Config/database.php';

    if(isset($_GET['class'])){
        $className = $_GET['class'].'Controller';

<<<<<<< HEAD
=======
    }elseif(!isset($_GET['class'])){
        $className = 'ViewsController';
>>>>>>> pb/main
    }else{
        echo "Ingrese un Url Valido!!!";
        exit();
    }

<<<<<<< HEAD

=======
>>>>>>> pb/main
    if(class_exists($className)){
        $callClass = new $className();

        if(isset($_GET['function']) && method_exists($callClass, $_GET['function'])){
            $function = $_GET['function'];
            $callClass->$function();
<<<<<<< HEAD
=======
        }elseif(!isset($_GET['function']) || !method_exists($callClass, $_GET['function'])){
            $function = 'vistaHomePage';
            $callClass->$function();
>>>>>>> pb/main
        }else{
            echo "La Funcion no Existe!!!!";
        }
    }else{
        echo "La clase no Existe!!!";
    }