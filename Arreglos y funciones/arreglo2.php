<?php
$meses = ["Enero","Febrero","Marzo","Abril","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
$numeros = [1,543,12,45,78,90,64,452,100,12];
sort($numeros);
foreach($numeros as $numero){
  echo $numero . '</br>' ;
}
// Ordena de forma asendente sort($meses);
// Ordena de forma desendente rsort($meses);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recorrer arreglo</title>
</head>
<body>
  <h1>Meses del año</h1>
  <ul>
    <?php
     foreach ($meses as $mes){
     echo '<li>' .  $mes . '</li>' ;
     }
    
    ?>
  </ul>
</body>
</html>