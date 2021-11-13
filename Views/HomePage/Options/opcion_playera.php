<form action="?class=Views&function=producto" method="POST">
    <!-- SEXO PLAYERA-->
    <label for="Sexo">
        <p>Sexo</p>
        <input type="radio" name="sexo" value="Caballero"  checked> Caballero
        <input type="radio" name="sexo" value="Dama"> Dama
        <input type="radio" name="sexo" value="Nino"> Nino
    </label>
    <br>

    <!-- COLOR DEL PRODUCTO  -->
    <label for="Color">
        <P>Color Producto</P>
        <input type="radio" name="color" value="Negro"  id="Negro" checked> Negro
        <input type="radio" name="color" value="Blanco" id="Blanco"> Blanco
        <input type="radio" name="color" value="Gris"   id="Gris"> Gris

    </label>
    <br>

    <!-- TALLA DE LA PRENDA-->
    <label for="Talla" >
        <p>Talla</p>
        <input type="radio" name="talla" value="Grande" > Grande
        <input type="radio" name="talla" value="Mediana" checked> Mediana
        <input type="radio" name="talla" value="Chica" > Chica
    </label>
    <br>

    
    <!-- CANTIDAD PRODUCTO-->
    <p>Cantidad</p>
    <input type="number" name="Cantidad" >

    <input type="submit" name="submit" value="Comprar Playera">
</form>