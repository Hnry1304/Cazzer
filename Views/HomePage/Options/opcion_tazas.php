<form action="?class=Views&function=producto" method="POST">
    <!-- COLOR DEL PRODUCTO  -->
    <label for="Color" >
        <P>Color Producto</P>
        <input type="radio" name="color" value="Blanco" id="tazaBlanco" checked> Blanco
    </label>
    <br>
    <!-- CANTIDAD PRODUCTO-->
    <p>Cantidad</p>
    <input type="number" name="Cantidad" value="1" id="cantidadCompra">

    <input type="submit" name="submit" value="Comprar Taza">
</form>