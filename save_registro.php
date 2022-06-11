<?php
   include("db.php");
   
   $name=$_POST["name"];
   $email=$_POST["email"];
   $password=$_POST['password'];
   $cpassword=$_POST["confirm-password"];
   if($password==$cpassword){
       $query = "INSERT INTO usuarios (name, email, password) VALUES ('$name','$email','$password')";
       $resultado = $conn->query($query);
       header("Location: registrarse.php");
       
   }
?>