<?php require_once 'Views/Assets/Layouts/Admin/header.php'?>

<?php  foreach($information as $information):?>
    <div class="imagenes">
        <img src="/imagenes/<?= $information['URL_IMAGEN']; ?>" alt="">
    </div>
<?php endforeach?>



<?php require_once 'Views/Assets/Layouts/Admin/footer.php'?>