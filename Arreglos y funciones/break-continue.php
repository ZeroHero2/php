<?php
$paises = ['México',"España","Colombia","Peru","Venezuela","Guatemala"];
echo "El arreglo con un break" . '<br>';
foreach ($paises as $pais){
  if ($pais == 'España'){
    break;
  }
  echo $pais . '<br>';
}

echo "El arreglo con un continue" . '<br>';
foreach($paises as $pais){
  if ($pais == 'España'){
    continue;
  }
  echo $pais . '<br>';
}
