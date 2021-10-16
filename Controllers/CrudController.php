<?php
    class CrudController{

        public function agregarImagen(){

            print_r($_FILES);
            $carpeta_destino = 'imagenes/';
            $archivo_subido = $carpeta_destino . $_FILES['Url']['name'];
            move_uploaded_file($_FILES['Url']['tmp_name'], $archivo_subido);


        }
    }