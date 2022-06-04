<?php
    include("db.php");

    $id=$_REQUEST['id'];
    $nombre = $_POST['nombre'];
    $description = $_POST['description'];
    $imagen = addslashes(file_get_contents($_FILES['formFile']['tmp_name']));
    $query = "UPDATE imagenes SET nombre='$nombre', descripcion='$description', imagenes='$imagen' WHERE id='$id'";
    $resultado = $conn->query($query);
    header("Location: edit.php");
?>