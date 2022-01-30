<?php require_once 'Views/Assets/Layouts/Clients/header.php' ?>
    
    <div class="vistaProducto">
        <div class="vistaImagen">

            <?php if($producto == 'playera'): ?>

            <div class="playeraCaballero" id="playeraCaballero">
                <img src="/imagenes/Ropa/playera_negra_hombre.png"  alt="shirt" class="shirt" id="black_shirt_man">
                <img src="/imagenes/Ropa/playera_blanca_hombre.png" alt="shirt" class="shirt" id="white_shirt_man">
                <img src="/imagenes/Ropa/playera_gris_hombre.png"   alt="shirt" class="shirt" id="gray_shirt_man">
                                                                    
            </div>

            <div class="playeraDama" id="playeraDama">
                <img src="/imagenes/Ropa/playera_negra_mujer.png"   alt="shirt" class="shirt" id="black_shirt_woman">
                <img src="/imagenes/Ropa/playera_blanca_mujer.png"  alt="shirt" class="shirt" id="white_shirt_woman">
                <img src="/imagenes/Ropa/playera_gris_mujer.png"    alt="shirt" class="shirt" id="gray_shirt_woman">
            </div>

            <div class="playeraNinos" id="playeraNinos">
                <img src="/imagenes/Ropa/playera_nino_negro.png"    alt="shirt" class="shirt" id="black_shirt_kids">
                <img src="/imagenes/Ropa/playera_nino_blanco.png"   alt="shirt" class="shirt" id="white_shirt_kids">
                <img src="/imagenes/Ropa/playera_nino_gris.png"     alt="shirt" class="shirt" id="gray_shirt_kids">
            </div>
            <img src="/imagenes/<?= $information['URL_IMAGEN']; ?>" alt="" class="img">
            <?php require_once'Views/HomePage/Options/Formularios/opcion_playera.php'; ?>

            <?php elseif($producto == 'sudadera'): ?>
            <div class="sudaderasUnisex" id="sudaderasUnisex">
                <img src="/imagenes/Ropa/sudadera_negra.png"    alt="sudadera_negra"     class="shirt" id="black_sweater">
                <img src="/imagenes/Ropa/sudadera_blanca.png"   alt="sudadera_blanca"    class="shirt" id="white_sweater">
                <img src="/imagenes/Ropa/sudadera_gris.png"     alt="sudadera_gris"      class="shirt" id="gray_sweater">
            </div>
            <img src="/imagenes/<?= $information['URL_IMAGEN']; ?>" alt="" class="img">
            <?php require_once'Views/HomePage/Options/Formularios/opcion_sudadera.php'; ?>


            <?php elseif($producto == 'taza'): ?>
            <div class="TazasBlanks" id="TazaBlanks">
                <img src="/imagenes/Tazas/tazaBlanca.png" alt="taza" class="taza" id="taza">

            </div>
            <?php require_once'Views/HomePage/Options/Formularios/opcion_tazas.php'; ?>


            <?php elseif($producto == 'gorra'): ?>
            <div class="GorrasTrucker" id="GorrasTrucker">
                <img src="/imagenes/Gorras/gorra_negra.png"   alt="gorra_negra"     class="caps"     id="gorra_negra">
                <img src="/imagenes/Gorras/gorra_blanco.png"  alt="gorra_blanca"    class="caps"     id="gorra_blanca">
                <img src="/imagenes/Gorras/gorra_azul.png"    alt="gorra_azul"      class="caps"     id="gorra_azul">
                <img src="/imagenes/Gorras/gorra_roja.png"    alt="gorra_roja"      class="caps"     id="gorra_roja">
                <img src="/imagenes/Gorras/gorra_rosa.png"    alt="gorra_rosa"      class="caps"     id="gorra_rosa">
                <img src="/imagenes/Gorras/gorra_naranja.png" alt="gorra_naranja"   class="caps"     id="gorra_naranja">
            </div>
            <?php require_once'Views/HomePage/Options/Formularios/opcion_gorras.php'; ?>

            <?php elseif($producto == 'funda'): ?>
            <div>
                <h1>Funda Celular</h1>
            </div>

            <?php elseif($producto == 'personalizacion'): ?>
            <div>
                <h1>Personalizacion</h1>
            </div>

            <?php endif; ?>
            

        </div>
        
    </div>

<?php require_once 'Views/Assets/Layouts/Clients/footer.php' ?>