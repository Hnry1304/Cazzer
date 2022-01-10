<?php
    require_once 'Models/Cliente/Datos.php';

    class compras extends Datos{

        public function AgregarDatosCompra(){
            $sql = "INSERT INTO compras VALUES (
                NULL,:nombre,:id_producto,:producto,:sexo,:talla,:color,:cantidad,:telefono,:precio)";
            
            $statement = $this->conexion->prepare($sql);

            $statement->execute(array(
                ":nombre" => $this->getNombre(),
                ":id_producto" => $this->getIdProducto(),
                ":producto" => $this->getProducto(),
                ":sexo" => $this->getSexo(),
                ":talla" => $this->getTalla(),
                ":color" => $this->getColor(),
                ":cantidad" => $this->getCantidad(),
                ":telefono" => $this->getTelefono(),
                ":precio" => $this->getPrecio()
            ));

        }
    }