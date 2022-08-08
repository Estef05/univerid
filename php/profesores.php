<?php

require "conexion.php";

session_start();

$id_maestro = $_POST["txt_matricula"];
$nombre_m = $_POST["txt_nom"];
$materia_im = $_POST["txt_materia"];
$correo = $_POST["txt_correo"];


if(empty($_POST['txt_matricula']) && empty ($_POST['txt_nom'])&& empty ($_POST['txt_materia']) 
 && empty ($_POST['correo']) )
{
  echo "HAY CAMPOS SIN RELLENAR, PORFA RELLENAR TODOS LOS CAMPOS COMPIS MUAK ";
}

else
{
   //INSERT TODOS LOS VALORES PARA LA BASE DE DATOS
}


$insertar = mysqli_query($conexion, "INSERT INTO alumnos (matricula, nombre, apellidos, carrera, correo) VALUES (210528,'','','','')");
   //hacer la tabla de la  base de datos de alumnos 



?>