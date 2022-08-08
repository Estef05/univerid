<?php
include "conexion.php";
$student_id = $_GET['matri'];


if (isset($_POST["btnactualizar"])){

    $matri_al = $_POST['txtmatri'];
    $nombreal = $_POST["txtnom"];
    $apellidoal = $_POST["txtape"];
    $carreral = $_POST ["txtcorrera"];
    $correoal = $_POST ["txtcorrera"];


$modificar_al = "UPDATE alumnos SET nombre = '$nombreal', apellido = '$apellidoal', carreral= '$carreral' = $Correo='$correoal'";

$resultadoupdate = $conexion-> query($modificar_al);
if($resultadoupdate == TRUE)
{
  echo "Actualizado correctamente";
}
else
{
  echo "error" . $modificar_al . "<br>" . $conexion->error;
}

}

//ejecutar la conexion y la instruccion del update

$sql = "SELECT * FROM alumnos WHERE matri = '$student_id'";


$resultadoselect = $conexion->query($sql);

if ($resultadoselect->num_rows > 0){
  while ($row = $resultadoselect->fetch_assoc()){
    

    $matri_al = $_POST['txtmatri'];
    $nombreal = $_POST["txtnom"];
    $apellidoal = $_POST["txtape"];
    $carreral = $_POST ["txtcorrera"];
    $correoal = $_POST ["txtcorrera"];
  }
}




?>

<!doctype html>
<html lang="en">
  <head>
    <title>Modificar Alumnos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../CSS/index.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  
   
  <div class="container-flued">
  <div class="row">
    <div class="col-12">
      <img src="../IMG/alll.png" class="LOGO" width="300" height="300">
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <form action="../php/alumnos.php" method="post" class="form-group">    <!-- //el metodo post hace una peticion  -->

        <div class="form-group">
      <div class="col-12">
        
        <label for="inputEmail4" class="form-label"><h4>Matricula</h4></label>
        <input type="text" class="form-control"  placeholder="Ingresa tu matricula" Required name="txtmatri">
      </div>

        <label for="inputEmail4" class="form-label"><h4>Nombre</h4></label>
        <input type="text" class="form-control"  placeholder="Ingresa un Nombre" Required name="txtnom">
      </div>
      <div class="col-md-12">
        <label for="inputPassword4" class="form-label"><h4>Apellidos</h4></label>
        <input type="text" class="form-control"  placeholder="Ingresa apellido" required name="txtape">
      </div>

      <div class="col-md-12">
        <label for="inputPassword4" class="form-label"><h4>Carrera</h4></label>
        <input type="text" class="form-control"  placeholder="Ingresa edad" required name="txtcarrera">
      </div>

      <div class="col-md-12">
        <label for="inputPassword4" class="form-label"><h4>Correo</h4></label>
        <input type="email" class="form-control"  placeholder="Ingresa correo" required name="txtcorreo">
      </div>
      </div>
      <br>
      <div class="col-12">
        <button class="boton" type="submit" class="btn btn-primary" style="margin-left: 20px;">Registrar</button>
      </div>
      <br>
    </form>
    </div>
  </div>
</div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
