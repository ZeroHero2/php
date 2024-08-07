<?php
// 
function es_estudiante_legend($platzi_rank){
    if ($platzi_rank>=20000){
        echo "Eres estudiante legendario";
    }
    else{
        echo "No eres estudiante legendario";
    }
}
$platzi_rank = (int)readline("Ingresa tu Platzi Rank: ");

es_estudiante_legend($platzi_rank);
echo "\n"; 