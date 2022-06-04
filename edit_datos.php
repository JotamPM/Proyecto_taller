<?php include("includes/header.php") ?>

<?php
    include("db.php");
    $id = $_REQUEST['id'];
    $query = "SELECT * FROM imagenes WHERE id='$id'";
    $resultado = $conn->query($query);
    $row=$resultado->fetch_assoc();
?>

<center>
        <div class="container p-4">
            <div class="col-md-4">
                <h1 class="text-center">Editar los datos de la imagen</h1>
                <form action="save_edit.php?id=<?php echo $_GET['id'];?>" method="POST" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                        <input type="text" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nombre" value="<?php echo $row['nombre'];?>">
                    </div>
                    <div class="form-group">
                        <textarea name="description" required rows="4" class="form-control" placeholder="Descripción de la imagen"><?php echo $row['descripcion']; ?></textarea>
                    </div>
                    <div class="mb-3, container p-4">
                        <input class="form-control" required type="file" name="formFile">
                    </div>
                        <input type="submit" class="btn btn-success btn-block" name="actualizar" value="Actualizar">
                </form>
            </div>
        </div>
    </center>

<?php include("includes/footer.php") ?>