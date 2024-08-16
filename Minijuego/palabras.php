<?php
$palabras = ["sol", "luna", "cielo"];
$palabrasDesordenadas = [];

for ($i=0; $i<3; $i++){
    $palabrasDesordenadas[$i] = str_shuffle($palabras[$i]);
}
print_r($palabrasDesordenadas);