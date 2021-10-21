<?php require_once 'Views/Assets/Layouts/Admin/header.php'; ?>

    <div class="formulario">

        <form action="?class=Crud&function=addImagenes" method="post" enctype="multipart/form-data">
            <label for="url_imagen">
                Url:
                <input type="file" name="url">

                <input type="submit" value="Agregar">
            </label>
        </form>
    </div>

<?php require_once 'Views/Assets/Layouts/Admin/footer.php'; ?>