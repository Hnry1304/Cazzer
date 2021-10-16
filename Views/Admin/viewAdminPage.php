<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav class="navegations">
            <a href="#">Log Out</a>
        </nav>

        <section class="content">
            <article class="formulario">
                <form action="?class=Crud&function=agregarImagen" method="post" enctype="multipart/form-data">
                    
                    <label for="Url">
                        Imagen:
                        <input type="file" name="Url">
                    </label>

                    <input type="submit" name="submit" value="Agregar">
                </form>

            </article class="products">
            
            <article>    
                <h1>CRUD</h1>
            </article>

        </section>


    </div>
</body>
</html>