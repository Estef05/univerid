<?php

//en get solo se obtiene un id
// en post envia datos o obvtiene varios datos 

require "conexion.php";
$estudiante_id = $_GET[ 'Matricula_al'];
//eliminar la informaxion de la instruccion DELETE 
$eliminaralumno = "DELETE FROM alumnos WHERE Matricula_alumno = '$estudiante_id' ";
//guarde la conexion de la base de daros y elimene el registro 
$resultado = $conexion-> query ($eliminaralumno);
//verificar si se elimino correctamente el registro 
if($resultado == TRUE ){

    header ("Location: ../php/ConsultarAl.php");

}
else{
    echo "ERROR NI MODO XD ".$eliminaralumno . "<br>" . $conexion->error;
    
}


?>
