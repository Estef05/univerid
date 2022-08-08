<?php
  include("conexion.php");
  
  session_start();
  $_SESSION['login'] = false;

  $usuario=$_POST["usuario"];
  $password=$_POST["clave"];

  $consulta="select * from usuarios where usuario='$usuario'";
  $consulta=mysqli_query($conexion, $consulta);
  $consulta=mysqli_fetch_array($consulta);

  if($consulta){
    if($password == $consulta['clave']){
      $_SESSION['login']=true;
      $_SESSION['usuario']=$consulta['usuario'];
      $_SESSION['nombre']=$consulta['nombre'];
      header("Location:index.html");
    }else{
      echo "Contraseña incorrecta";
    }
  }else{
    echo "El usuario ingresado no existe";
  }
?>