<div class="formulario">
    <form action="/Views/producto&id=<?=$_GET['id']?>&pagina=<?=$_GET['pagina']?>" method="POST">    
        <label for="tamano">
            <p>Tamano</p>
            <input type="radio" name="talla" value="Adulto" id="gorraAdulto" checked> Adulto
            <input type="radio" name="talla" value="Nino" id="gorraNino"> Nino
        </label>

        <!-- COLOR DEL PRODUCTO  -->
        <label for="Color">
            <P>Color Producto</P>
            <input type="radio" name="color" value="Negro" id="gorraNegro" checked> Negro
            <input type="radio" name="color" value="Blanco" id="gorraBlanco"> Blanco
            <input type="radio" name="color" value="Azul" id="gorraAzul"> Azul
            <input type="radio" name="color" value="Naranja" id="gorraNaranja">Naranja
            <input type="radio" name="color" value="Rojo" id="gorraRojo">Rojo
            <input type="radio" name="color" value="Rosa" id="gorraRosa">Rosa

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

        <input type="submit" name="submit" value="Comprar Gorra" id="Comprar">
    </form>
</div>