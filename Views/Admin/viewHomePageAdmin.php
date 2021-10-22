<?php require_once 'Views/Assets/Layouts/Admin/header.php'?>
    <article class="box">
        <?php  foreach($information as $information):?>
            <div class="cuadro">
                <a href="#">
                    <img src="/imagenes/<?= $information['URL_IMAGEN']; ?>" alt="" class="imagenes">
                </a>
            </div>
        <?php endforeach?>
    </article>
<?php require_once 'Views/Assets/Layouts/Admin/footer.php'?>