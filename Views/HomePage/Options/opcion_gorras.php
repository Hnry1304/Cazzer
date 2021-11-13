<form action="?class=Views&function=producto" method="POST">    
    <label for="tamano">
        <p>Tamano</p>
        <input type="radio" name="talla" value="Adulto" checked> Adulto
        <input type="radio" name="talla" value="Nino"> Nino
    </label>

    <!-- COLOR DEL PRODUCTO  -->
    <label for="Color">
        <P>Color Producto</P>
        <input type="radio" name="color" value="Negro" checked> Negro
        <input type="radio" name="color" value="Blanco" > Blanco
        <input type="radio" name="color" value="Gris" > Gris

    </label>
    <br>
    <!-- CANTIDAD PRODUCTO-->
    <p>Cantidad</p>
    <input type="number" name="Cantidad" >

    <input type="submit" name="submit" value="Comprar Gorra">
</form>