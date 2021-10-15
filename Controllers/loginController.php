<?php
    class loginController{

        public function login(){
            var_dump($_POST);
            require_once 'Validations/loginValidation.php';
        }
    }