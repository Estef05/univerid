<?php

include ("../php/conexion.php");
$matri_al = $_POST['txtmatri'];
$nombreal = $_POST["txtnom"];
$apellidoal = $_POST["txtape"];
$carreral = $_POST ["txtcorrera"];
$correoal = $_POST ["txtcorrera"];

$sql="insert into alumnos values('$matri_al','$nombreal','$apellidoal','$apellidomat','$carreral','$correoal')";

if(mysqli_query($conexion,$sql))  

{
    header("Location:../../html/index.html");  
}
else
{
    echo "Error: ".sql."<br>".mysqli_error($conexion);


}
?>