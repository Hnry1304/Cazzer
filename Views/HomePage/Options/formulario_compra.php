<div class="formulario">
    
    <!-- TIPO PRODUCTO -->
    <label for="Producto">
        <p>Producto</p>
        <input type="radio" name="Producto" value="Playera"  id="Playera" checked> Playera
        <input type="radio" name="Producto" value="Sudadera" id="Sudadera"> Sudadera
        <input type="radio" name="Producto" value="Gorra"    id="Gorra"> Gorra
        <input type="radio" name="Producto" value="Taza"     id="Taza"> taza

    </label>

    <div id="playera_formulario">
        <?php require_once 'Views/HomePage/Options/opcion_playera.php';?>
    </div>

    <div id="sudadera_formulario">
        <?php require_once 'Views/HomePage/Options/opcion_sudadera.php';?>
    </div>

    <div id="gorra_formulario">
        <?php require_once 'Views/HomePage/Options/opcion_gorras.php';?>
    </div>

    <div id="taza_formulario">
        <?php require_once 'Views/HomePage/Options/opcion_tazas.php';?>
    </div>



</div>
<!--
<script>
    
    // Pertenece a las imagenes de las tazas,sudaderas, gorras y playeras
    let opcion_playeras = document.getElementById('playeras');
    let opcion_sudaderas = document.getElementById('sudaderas');
    let opcion_tazas = document.getElementById('tazas');
    let opcion_gorras = document.getElementById('gorras');


    // Pertenece a las opciones de remeras...
    let opcion_caballero = document.getElementById('Caballero');
    let opcion_dama = document.getElementById('Dama');
    let opcion_nino = document.getElementById('Nino');


    //  Pertenece a cada div, cada uno almacena formulario para cada area..
    let formulario_playera = document.getElementById('playera_formulario');
    let formulario_gorra = document.getElementById('gorra_formulario');
    let formulario_taza = document.getElementById('taza_formulario');


    // Desactivamos formularios para gorras y tazas...
    formulario_gorra.style.display = "none";
    formulario_taza.style.display = "none";


    // // Id Pertenece al color de la playera
    let colorBlanco = document.getElementById('Blanco');
    let colorNegro  = document.getElementById('Negro');
    let colorGris   = document.getElementById('Gris');

    // // Id Pertenece tipo Producto, Playera, Sudadera, Gorra y Taza
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
        formulario_playera.style.display = "none";
        formulario_gorra.style.display = "none";
        formulario_taza.style.display = "block";

    }

    //Activar Playera por defecto
    playera.onclick = activarPlayera;
    function activarPlayera(evento){
        formulario_gorra.style.display = "none";
        formulario_taza.style.display = "none";
        formulario_playera.style.display = "block";
    }

    //Activar Sudaderas
    sudadera.onclick = activarSudadera;
    function activarSudadera(evento){
        alert('Sudaderas');
    }

    //Activar Gorra
    gorra.onclick = activarGorra;
    function activarGorra(evento){
        formulario_taza.style.display = "none";
        formulario_playera.style.display = "none";
        formulario_gorra.style.display = "block";
    }

    //Activar vista Playera Dama
    opcion_dama.onclick = activar_opcion_dama;
    function activar_opcion_dama(evento){
        alert('Hello World');
    }    

</script>
-->