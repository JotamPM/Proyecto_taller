<?php include("includes/header.php") ?>

    <center>
        <div class="container p-4">
            <div class="col-md-4">
                <h1 class="text-center">Añada la imagen</h1>
                <form action="save_image.php" method="POST" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                        <input type="text" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nombre">
                    </div>
                    <div class="form-group">
                        <textarea name="description"  required rows="4" class="form-control" placeholder="Descripción de la imagen"></textarea>
                    </div>
                    <div class="mb-3, container p-4">
                        <input required class="form-control" type="file" name="formFile">
                    </div>
                        <input type="submit" class="btn btn-success btn-block" onclick="showMessage('Imagen Añadida')" name="guardar" value="Guardar">
                </form>
            </div>
        </div>
    </center>
    <div id="snackbar"></div>
<?php include("includes/footer.php") ?>