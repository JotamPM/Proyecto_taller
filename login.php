<?php
include("db.php");

$user=$_POST["user"];
$password=$_POST["password"];
$sql= $conn->query("SELECT * FROM usuarios WHERE name='$user' AND password='$password'");
$fila= mysqli_num_rows($sql);
if($datos=$sql->fetch_object() && $fila > 0){
    session_start();
    $_SESSION['name'] = $user;
    header("Location: home.php");
}else{
    echo "no existe el usuario";
}
?>