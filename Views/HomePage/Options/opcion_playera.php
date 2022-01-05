<form action="/Views/producto&id=<?=$_GET['id']?>&pagina=<?=$_GET['pagina']?>" method="POST">
    <!-- SEXO PLAYERA-->
    <label for="Sexo">
        <p>Sexo</p>
        <input type="radio" name="sexo" value="Caballero"  id="OptionsplayeraCaballero" checked> Caballero
        <input type="radio" name="sexo" value="Dama" id="OptionsplayeraDama"> Dama
        <input type="radio" name="sexo" value="Nino" id="OptionsplayeraNino"> Nino
    </label>
    <br>

    <!-- COLOR DEL PRODUCTO  -->
    <label for="Color">
        <P>Color Producto</P>
        <input type="radio" name="color" value="Negro"  id="playeraNegra" checked> Negro
        <input type="radio" name="color" value="Blanco" id="playeraBlanca"> Blanco
        <input type="radio" name="color" value="Gris"   id="playeraGris"> Gris

    </label>
    <br>

    <!-- TALLA DE LA PRENDA-->
    <label for="Talla" >
        <p>Talla</p>
        <input type="radio" name="talla" value="Grande" id="playeraGrande"> Grande
        <input type="radio" name="talla" value="Mediana" id="playeraMediana" checked> Mediana
        <input type="radio" name="talla" value="Chica" id="playeraChica"> Chica
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

    <input type="submit" name="submit" value="Comprar Playera">
</form>