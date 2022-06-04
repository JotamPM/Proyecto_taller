<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog_de_imagenes</title>
    <!--CONEXION CON BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--CONEXION CON style.css-->
    <link rel="stylesheet" href="includes/style.css">
    <!--FONT AWESOME-->
    <script src="https://kit.fontawesome.com/298a37529f.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
            <img src="images/camara-reflex-digital.png" alt="" width="40" height="35" class="d-inline-block align-text-top">
                FOTOGRAFIAS DEL YOTY
            </a>
            <div class="form-inline">
                <a href='addimage.php'>
                    <button class="btn btn-light mr-2 my-2 my-sm-0" 
                    type="submit">Añadir Imagen</button>
                </a>
                <a href='edit.php'>
                    <button class="btn btn-light my-2 my-sm-0" 
                    type="submit">Editar</button>
                </a>
            </div>
        </div>
    </nav>
    </div>