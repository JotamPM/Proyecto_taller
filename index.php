<?php include("db.php") ?>

<?php include("includes/header.php") ?>
<section id="galeria" class="container">
    <div class="container p-4">
        <div class="row">
<?php
    $query = "SELECT * FROM imagenes";
    $resultado = $conn->query($query);
    while($row = $resultado->fetch_assoc()){
?>
        <div class="col-lg-4">
            <div class="container p-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['nombre']?></h5>
                        <p class="card-text"><?php echo $row['descripcion']?></p>
                    </div>
                    <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagenes'])?>" class="card-img-bottom, img-fluid   " alt="...">
                </div>
            </div>
        </div>
<?php } ?>
        </div>
    </div>
</section>


<?php include("includes/footer.php") ?>