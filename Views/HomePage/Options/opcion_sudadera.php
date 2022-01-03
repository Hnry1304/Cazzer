<form action="?class=Views&function=producto" method="POST">
    <!-- SEXO PLAYERA-->
    <label for="Sexo">
        <p>Sexo</p>
        <input type="radio" name="sexo" value="Caballero" id="sudaderaCaballero" checked> Caballero
        <input type="radio" name="sexo" value="Dama" id="sudaderaDama"> Dama
        <input type="radio" name="sexo" value="Nino" id="sudaderaNino"> Nino
    </label>
    <br>

    <!-- COLOR DEL PRODUCTO  -->
    <label for="Color">
        <P>Color Producto</P>
        <input type="radio" name="color" value="Negro"  id="sudaderaNegro" checked> Negro
        <input type="radio" name="color" value="Blanco" id="sudaderaBlanco"> Blanco
        <input type="radio" name="color" value="Gris"   id="sudaderaGris"> Gris

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

    
    <!-- CANTIDAD PRODUCTO-->
    <p>Cantidad</p>
    <input type="number" name="Cantidad" value="1" id="cantidadCompra">

    <input type="submit" name="submit" value="Comprar Sudadera">
</form>