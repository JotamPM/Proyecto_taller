<?php
include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM imagenes WHERE id=$id";
    $result = $conn->query($query);
    if(!$result){
        die("query failed");
    }
    header("Location: edit.php");
}
?>