<?php

session_start();
//Destruir la sesion abierta con la base de datos 


session_destroy();
//Nos manda a la pagina inicial
header("Location: ../html/inicioS.html");

exit ();
?>