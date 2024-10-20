<?php 
echo "----------- Numeros del 1 al 10 -----------" . '<br>';
for ($i=0; $i<10; $i++){
  echo $i . '<br>';
}

echo "----------- arreglo por meses con for -----------" . '<br>';

$meses = ["Enero","Febrero","Marzo","Abril","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];

for($i=0; $i<count($meses); $i++){
echo $meses[$i] . '<br>';
}

echo "----------- arreglo por meses con while-----------" . '<br>';
$contador=0;
while($contador < count($meses)){
  echo $meses[$contador] . '<br>';
  $contador ++;
}
