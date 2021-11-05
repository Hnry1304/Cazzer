<div class="formulario">
    <form action="?class=Views&function=confirmation" method="POST">
        <!-- COLOR DEL PRODUCTO  -->
        <P>Color Producto</P>
        <label for="Color">
            <input type="radio" name="color" value="Negro" checked> Negro
            <input type="radio" name="color" value="Blanco"> Blanco
        </label>
        <br>

        <!-- TALLA DE LA PRENDA-->
        <p>Talla</p>
        <label for="Talla">
            <input type="radio" name="talla" value="Grande"> Grande
            <input type="radio" name="talla" value="Mediana" checked> Mediana
            <input type="radio" name="talla" value="Chica"> Chica
        </label>
        <br>
        
        <!-- SEXO PLAYERA-->
        <p>Sexo</p>
        <label for="Sexo">
            <input type="radio" name="sexo" value="Hombre" checked> Hombre
            <input type="radio" name="sexo" value="Mujer"> Mujer
        </label>
        <br>


        <input type="submit" name="submit" value="Comprar">
    </form>
</div>