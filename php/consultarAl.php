<?php
 require "conexion.php";

 $consultaralumnos = "SELECT * FROM alumnos";
 $result = $conexion -> query($consultaralumnos);

?>

<div class= "row">
<div class ="col-12">
<table class= "table mt-5">
<thead class ="thead-dark">
    <tr>
        <th scope = "col"> ID_ALUMNOS</th>
        <th scope = "col"> nombre_alumno</th>
        <th scope = "col"> apellido materno>/th>
        <th scope = "col"> apellido paterno</th>
        <th scope = "col"> edad</th>
        <th scope = "col"> telefono</th>
        <th scope = "col"> correo</th>
    </tr>
</thead>
</table>
</div>


<tr>
    <td>
        <?php echo $row['matricula_al'];//matricula alumno ?></td>
        
    <td>
        <?php echo $row['nombre_al'];//matricula alumno ?></td>
        
    <td>
        <?php echo $row['apellido ma'];//matricula alumno ?></td>
        
    <td>
        <?php echo $row['apellido pa'];//matricula alumno ?></td>
        
    <td>
        <?php echo $row['edad'];//matricula alumno ?></td>
        
    <td>
        <?php echo $row['telefono'];//matricula alumno ?></td>
    
    <td>
        <?php echo $row['correo'];//matricula alumno ?></td>
    <td><a class =m</td>
    </tr>