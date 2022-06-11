

<?php include("includes/header-login.php") ?>

    <center>
        <div class="container p-4">
            <div class="col-md-4">
                <div class="card card-body">
                    <h1>Login</h1>
                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <input type="user" required class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su usuario" name="user">
                        </div>
                        <div class="mb-3">
                            <input type="password" required class="form-control" id="exampleFormControlInput1" placeholder="contraseña" name="password">
                        </div>
                        <div class="mb-3">
                            <a class="btn btn-primary" href="registrarse.php" role="button">Registrarse</a>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="enviar" value="Entrar">
                    </form>
                </div>    
            </div>
        </div>
    </center>

<?php include("includes/footer.php") ?>