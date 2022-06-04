<?php include("db.php") ?>
<?php include("includes/header.php") ?>

    <center>
        <div class="container p-4">
            <h1>Edite las imagenes</h1>
        </div>
        <div class =" col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM imagenes";
                        $result_task = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_task)){?>
                            <tr>
                                <td><?php echo $row['nombre']?></td>
                                <td><?php echo $row['descripcion']?></td>
                                <td><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagenes'])?>"></td>
                                <td>
                                    <a href="edit_datos.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                    <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    <a href="delete_image.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </a>
                                </td>
                            </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </center>

<?php include("includes/footer.php") ?>