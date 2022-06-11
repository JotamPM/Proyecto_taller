<?php
    session_start();
?>
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
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">
            <img src="images/camara-reflex-digital.png" alt="" width="40" height="35" class="d-inline-block align-text-top">
                FOTOGRAFIAS DEL YOTY
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-link disabled">Bienvenido <?php echo $_SESSION['name']; ?> </a>
                <a class="nav-link" href="addimage.php">Añadir imagen</a>
                <a class="nav-link" href="edit.php">Editar imagen</a>
            </div>
                <a href='logout.php'>
                    <button class="btn btn-light mr-2 my-2 my-sm-0" 
                    type="submit">Logout</button>
                </a>
            </div>
        </div>
    </nav>