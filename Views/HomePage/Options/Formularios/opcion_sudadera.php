<div class="formulario">
    <form action="/Views/producto&id=<?=$_GET['id']?>&pagina=<?=$_GET['pagina']?>" method="POST">
        <!-- SEXO PLAYERA-->
        <label for="Sexo">
            <p>Sexo</p>
            <input type="radio" name="sexo" value="Caballero" checked> Caballero
            <input type="radio" name="sexo" value="Dama"> Dama
            <input type="radio" name="sexo" value="Nino"> Nino
        </label>
        <br>

        <!-- COLOR DEL PRODUCTO  -->
        <label for="Color">
            <P>Color Producto</P>
            <input type="radio" name="color" value="Negro" onclick="black_shirt()" checked> Negro
            <input type="radio" name="color" value="Blanco" onclick="white_shirt()"> Blanco
            <input type="radio" name="color" value="Gris"   onclick="gray_shirt()"> Gris

        </label>
        <br>

        <!-- TALLA DE LA PRENDA-->
        <label for="Talla" >
            <p>Talla</p>
            <input type="radio" name="talla" value="Grande" id="sudaderaGrande" > Grande
            <input type="radio" name="talla" value="Mediana" id="sudaderaMediana" checked> Mediana
            <input type="radio" name="talla" value="Chica" id="sudaderaChica"> Chica
        </label>
        <br>
        
        <label for="Datos Personales" class="datos_personales">
            <p>Datos</p>
            <label for="username">
                Nombre:
                <input type="text" name="name" id="name" >
            </label>

            <label for="telephone">
                Telefono:
                <input type="text" name="phone" id="phone">
            </label>
        </label>
        
        <!-- CANTIDAD PRODUCTO-->
        <p>Cantidad</p>
        <input type="number" name="Cantidad" value="1" id="cantidadCompra">

        <input type="submit" name="submit" value="Comprar Sudadera">
    </form>
</div>
<script src="/Views/Assets/Js/ocultarSudadera.js"></script>