<form action="/Views/producto&id=<?=$_GET['id']?>&pagina=<?=$_GET['pagina']?>" method="POST">
    <!-- COLOR DEL PRODUCTO  -->
    <label for="Color" >
        <P>Color Producto</P>
        <input type="radio" name="color" value="Blanco" id="tazaBlanco" checked> Blanco
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

    <input type="submit" name="submit" value="Comprar Taza">
</form>