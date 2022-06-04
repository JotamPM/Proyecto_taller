<?php

    include("db.php");

    $nombre = $_POST['nombre'];
    $description = $_POST['description'];
    $imagen = addslashes(file_get_contents($_FILES['formFile']['tmp_name']));
    $query = "INSERT INTO imagenes (nombre,descripcion, imagenes) VALUES ('$nombre','$description','$imagen')";
    $resultado = $conn->query($query);
    header("Location: addimage.php");

?>