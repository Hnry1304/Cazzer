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
    Scripts que nos oculta y muestra Formulario, depende que opcion Cliqueamos
-->
<script src="/Views/Assets/Js/ocultar_formularios.js"></script>
