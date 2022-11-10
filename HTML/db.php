<?php

function conn(){
   $hostname = "localhost";
   $usuariodb = "root";
   $telefonodb = "";
   $dbname = "naturalife";  

   $conectar = mysqli_connect($hostname, $usuariodb, $telefonodb, $dbname);
   
   return $conectar;
}

?>