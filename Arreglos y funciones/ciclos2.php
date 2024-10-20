<?php
$meses = ["Enero","Febrero","Marzo","Abril","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];

$amigo = [
  'telefono' => 55123123,
  'edad' => 15,
  'pais' => 'mexico'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Meses</h1>
  <ul>
    <?php
    foreach($meses as $mes){
      echo '<li>' . $mes . '</li>';
    }
    ?>
  </ul>
  <p>----- Recorrer arreglo asociativo -------</p>
  <?php
   foreach($amigo as $dato => $valor){
    echo '<li>' . $dato . ': ' . $valor . '</li>';
   }
   ?>
</body>
</html>