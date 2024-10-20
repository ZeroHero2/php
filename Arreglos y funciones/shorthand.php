<?php
// Si la variable no esta definida me arroja el mensaje 
 $edad = 18;
$edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad';
echo 'Edad: ' . $edad;
//Esto es como si fuera un if asi:
 /*
  if (isset($edad)){
    $edad = $edad;
  }else{
    $edad = 'El usuario no establecio su edad';
  }
  echo 'Edad: ' . $edad;
  */