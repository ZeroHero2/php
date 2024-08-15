<?php
$numeros = [13, 21, 36, 12, 91, 31, 217, 14, 9, 110];

echo max ($numeros);
echo "\n";
echo min ($numeros);
echo "\n";

$arbolito = 8;
function imprimir ($arbolito){
    for ($i=0; $i<$arbolito; $i++){
        echo  str_repeat("🎄", $i ) ;
        echo "\n";
    }

}
imprimir ($arbolito);

