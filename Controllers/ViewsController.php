<?php
    class ViewsController{

        public function viewMainPage(){
            require_once 'Views/HomePage/viewMainPage.php';
        }

        //Vista de Login de Admi
        public function viewLoginPage(){
            require_once 'Views/Login/viewLoginPage.php';
        }
    }