<?php
$nombre = isset($_REQUEST['nombre']) ? $_REQUEST['nombre']:'' ;
$apellido = isset($_REQUEST['apellido']) ? $_REQUEST['apellido']:'' ;
$correo = isset($_REQUEST['correo']) ? $_REQUEST['correo']:'' ;
$telefono = isset($_REQUEST['telefono']) ? $_REQUEST['telefono']:'' ;

echo " Hola   $nombre  $apellido   Te voy a enviar spam a  $correo y te llamare por al madrugada a $telefono";