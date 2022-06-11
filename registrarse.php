
<?php include("includes/header-login.php") ?>

<center>
        <div class="container p-4">
            <div class="col-md-4">
                <div class="card card-body">
                    <h1>Registrarse</h1>
                    <form action="save_registro.php" method="POST">
                        <div class="mb-3">
                            <p>Ingrese su nombre de Usuario:</p>
                            <input type="text" class="form-control" required aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Usuario" name="name">
                        </div>
                        <div class="mb-3">
                            <p>Ingrese su correo:</p>
                            <input type="email" required class="form-control" id="exampleFormControlInput1" placeholder="Usuario@correo.com" name="email">
                        </div>
                        <div class="mb-3">
                            <p>Ingrese su contraseña:</p>
                            <input type="password" required class="form-control" id="exampleFormControlInput1" placeholder="Contraseña" name="password">
                        </div>
                        <div class="mb-3">
                            <p>Confirme su contraseña:</p>
                            <input type="password" required class="form-control" id="exampleFormControlInput1" placeholder="Confirmar contraseña" name="confirm-password">
                        </div>
                        <div class="mb-3">
                            <a class="btn btn-primary" href="index.php" role="button">Ya tengo cuenta</a>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="enviar" value="Crear cuenta">
                    </form>
                </div>    
            </div>
        </div>
    </center>

<?php include("includes/footer.php") ?>