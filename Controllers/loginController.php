<?php
    require_once 'Models/Login/login.php';
    class loginController{

        public function login(){
            require_once 'Validations/loginValidation.php';


            $login = new Login();
            $login->setUsername($username);
            $login->setPassword($contrasena);

            $resultado = $login->comprobar();
            
            if(!$resultado){
                header('Location: index.php?class=views&function=viewLoginPage');

            }else{
                header('Location: index.php?class=Crud&function=readImagenes');
            }
        }
    }