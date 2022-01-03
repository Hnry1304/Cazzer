<?php require_once 'Views/Assets/Layouts/Clients/header.php';?>

<div class="formulario_compra">
    <h1>Formulario</h1>

    <form action="?class=Views&function=productoComprado" method="post">
        <label for="username">
            Nombre:
            <input type="text" name="name" >
        </label>

        <label for="telephone">
            Telefono:
            <input type="text" name="phone">
        </label>

        <input type="submit" name="submit" value="Confirmar">
    </form>
</div>

<?php require_once 'Views/Assets/Layouts/Clients/footer.php';?>