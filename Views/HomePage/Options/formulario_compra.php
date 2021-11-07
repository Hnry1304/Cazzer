<div class="formulario">
    <form action="?class=Views&function=confirmation" method="POST">
        <!-- TIPO PRODUCTO -->
        <label for="Producto">
            <p>Producto</p>
            <input type="radio" name="Producto" value="Playera"  id="Playera" checked> Playera
            <input type="radio" name="Producto" value="Sudadera" id="Sudadera"> Sudadera
            <input type="radio" name="Producto" value="Gorra"    id="Gorra"> Gorra
            <input type="radio" name="Producto" value="Taza"     id="Taza"> taza

        </label>
    
        <!-- SEXO PLAYERA-->
        <label for="Sexo">
            <p>Sexo</p>
            <input type="radio" name="sexo" value="Caballero" id="Caballero" checked> Caballero
            <input type="radio" name="sexo" value="Dama"      id="Dama"> Dama
            <input type="radio" name="sexo" value="Nino"      id="Nino"> Nino
        </label>
        <br>
    
        <!-- COLOR DEL PRODUCTO  -->
        <label for="Color" id="Colores">
            <P>Color Producto</P>
            <input type="radio" name="color" value="Negro"  id="Negro" checked> Negro
            <input type="radio" name="color" value="Blanco" id="Blanco"> Blanco
            <input type="radio" name="color" value="Gris"   id="Gris"> Gris

        </label>
        <br>

        <!-- TALLA DE LA PRENDA-->
        <label for="Talla" id="Talla">
            <p>Talla</p>
            <input type="radio" name="talla" value="Grande"  id="Grande"> Grande
            <input type="radio" name="talla" value="Mediana" id="Mediana" checked> Mediana
            <input type="radio" name="talla" value="Chica"   id="Chica"> Chica
        </label>
        <br>

        <!-- CANTIDAD PRODUCTO-->
        <p>Cantidad</p>
        <input type="number" name="Cantidad" >

        <input type="submit" name="submit" value="Comprar">
    </form>
</div>

<script>
    //Id Pertenece alos Labels
    let colores = document.getElementById('Colores');
    let talla = document.getElementById('Talla');

    // Id Pertenece al color de la playera
    let colorBlanco = document.getElementById('Blanco');
    let colorNegro  = document.getElementById('Negro');
    let colorGris   = document.getElementById('Gris');

    // Id Pertenece tipo Producto, Playera, Sudadera, Gorra y Taza
    let playera  = document.getElementById('Playera');
    let sudadera = document.getElementById('Sudadera');
    let gorra    = document.getElementById('Gorra');
    let taza     = document.getElementById('Taza');


    // id Pertenece a la imagen de la playera
    let playera_negra  = document.getElementById('playera_negra'); 
    let playera_blanca = document.getElementById('playera_blanca');
    let playera_gris   = document.getElementById('playera_gris');


    //Desactivamos la playera Blanca y Playera Gris
    playera_blanca.style.display = "none";
    playera_gris.style.display   = "none";


    //Activar Playera Blanca
    colorBlanco.onclick = activar_playeraBlanco;
    function activar_playeraBlanco(evento){
        playera_negra.style.display  = "none";
        playera_gris.style.display   = "none";
        playera_blanca.style.display = "block";
        
    }
    
    //Activar Playera Negra
    colorNegro.onclick = activar_playeraNegro;
    function activar_playeraNegro(evento){
        playera_blanca.style.display = "none";
        playera_gris.style.display   = "none";
        playera_negra.style.display  = "block";
    }

    //Activar Playera gris
    colorGris.onclick = activar_playeraGris;
    function activar_playeraGris(evento){
        playera_blanca.style.display = "none";
        playera_negra.style.display  = "none";
        playera_gris.style.display   = "block";
    }

    //Activar Opcion Tazas
    taza.onclick = activarTazas;
    function activarTazas(evento){
        colores.style.display = "none";
        talla.style.display   = "none";
    }

    playera.onclick = activarPlayera;
    function activarPlayera(evento){
        colores.style.display = "block";
        talla.style.display   = "block";
    }
</script>

