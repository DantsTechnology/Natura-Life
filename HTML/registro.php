<?php

include_once('db.php');

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$edad=$_POST['edad'];
$telefono=$_POST['telefono'];
$asunto=$_POST['asunto'];
$municipio=$_POST['municipio'];
$hora=$_POST['hora'];
$dia=$_POST['dia'];
$mensaje=$_POST['mensaje'];
$comentario=$_POST['comentario'];
$fechareg = date("d/m/y");

$correcto   = ($conectar=conn());
$consultaID = "SELECT Telefono FROM contacto WHERE 
               Telefono= '$telefono' ";
$consultaID = mysqli_query($correcto, $consultaID);
$consultaID = mysqli_fetch_array($consultaID);


if (!$consultaID) {
   $sql="INSERT INTO contacto VALUES ( '$nombre', '$apellidos', '$edad', '$telefono', '$asunto', '$municipio', '$hora', '$dia', '$mensaje', '$comentario', '$fechareg')";

   if (mysqli_query($correcto, $sql)) {
      include('correcto.html');
   }
   else {
      echo "Error" . $sql . "<br>" . mysqli_error($correcto);
   }
}
else {
   include('incorrecto.html');
}

mysqli_close($correcto);
?> 