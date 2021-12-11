<?php require_once 'Views/Assets/Layouts/Clients/header.php' ?>
    <div class="container">
        <div class="imagenes">

            <div class="playeraCaballero" id="playeraCaballero">
                <img src="/imagenes/Ropa/playera_negra_hombre.png"  alt="playera_negra"     class="shirt" id="playera_negra_caballero">
                <img src="/imagenes/Ropa/playera_blanca_hombre.png" alt="playera_blanca"    class="shirt" id="playera_blanca_caballero">
                <img src="/imagenes/Ropa/playera_gris_hombre.png"   alt="playera_gris"      class="shirt" id="playera_gris_caballero">

            </div>

            <div class="playeraDama" id="playeraDama">
                <img src="/imagenes/Ropa/playera_negra_mujer.png"   alt="playera_negra"     class="shirt" id="playera_negra_dama">
                <img src="/imagenes/Ropa/playera_blanca_mujer.png"  alt="playera_blanca"    class="shirt" id="playera_blanca_dama">
                <img src="/imagenes/Ropa/playera_gris_mujer.png"    alt="playera_gris"      class="shirt" id="playera_gris_dama">
            </div>

            <div class="playeraNinos" id="playeraNinos">
                <img src="/imagenes/Ropa/playera_nino_negro.png"    alt="playera_negra"     class="shirt" id="playera_negra_kids">
                <img src="/imagenes/Ropa/playera_nino_blanco.png"   alt="playera_blanca"    class="shirt" id="playera_blanca_kids">
                <img src="/imagenes/Ropa/playera_nino_gris.png"     alt="playera_gris"      class="shirt" id="playera_gris_kids">
            </div>

            <div class="sudaderasUnisex" id="sudaderasUnisex">
                <img src="/imagenes/Ropa/sudadera_negra.png"    alt="sudadera_negra"     class="shirt" id="sudadera_negra">
                <img src="/imagenes/Ropa/sudadera_blanca.png"   alt="sudadera_blanca"    class="shirt" id="sudadera_blanca">
                <img src="/imagenes/Ropa/sudadera_gris.png"     alt="sudadera_gris"      class="shirt" id="sudadera_gris">
            </div>

            <div class="TazasBlanks" id="TazaBlanks">
                <img src="/imagenes/Tazas/tazaBlanca.png" alt="taza" class="taza" id="taza">

            </div>

            <div class="GorrasTrucker" id="GorrasTrucker">
                <img src="/imagenes/Gorras/gorra_negra.png"   alt="gorra_negra"     class="caps"     id="gorra_negra">
                <img src="/imagenes/Gorras/gorra_blanco.png"  alt="gorra_blanca"    class="caps"     id="gorra_blanca">
                <img src="/imagenes/Gorras/gorra_azul.png"    alt="gorra_azul"      class="caps"     id="gorra_azul">
                <img src="/imagenes/Gorras/gorra_roja.png"    alt="gorra_roja"      class="caps"     id="gorra_roja">
                <img src="/imagenes/Gorras/gorra_rosa.png"    alt="gorra_rosa"      class="caps"     id="gorra_rosa">
                <img src="/imagenes/Gorras/gorra_naranja.png" alt="gorra_naranja"   class="caps"     id="gorra_naranja">
            </div>

            <img src="/imagenes/<?= $information['URL_IMAGEN']; ?>" alt="" class="img">

        </div>
        <?php require_once'Views/HomePage/Options/formulario_compra.php'; ?>
    </div>

<?php require_once 'Views/Assets/Layouts/Clients/footer.php' ?>

