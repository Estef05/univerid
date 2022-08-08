<?php

session_start();
include ("conexion.php");
$user = $_POST["correo"];
$pass = $_POST["pass"];
$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombreusuario= '$user' AND contrasenia = '$pass'");
if(mysqli_num_rows($validar_login) > 0)

{
    echo "jk :p";
    exit();

}
else 
{
    echo "no";
    exit ();
}


?>