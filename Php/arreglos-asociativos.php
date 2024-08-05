<?php
$edades = [
    "Carlos" => 18,
    "Marco" => 32,
    "Lucia" => 44,
];

echo "La edad de carlos es " . $edades['Carlos'] ;
echo "\n";
// Podemos mandar llamar a la variable colocando {}
$panes = [
    "Dona" => "Rellena",
    "Concha" => "Chocolate",
    "Rollo" => "Piña",
];
echo "Tenemos rollos de {$panes['Rollo']}" ;
echo "\n";
echo "-----------------------";
echo "\n";

$alumnos = [
    "Esteban" => [
        "edad" => 19,
        "promedio" => 7.5,
    ],

    "Luisa" => [
        "edad" => 23,
        "promedio" => 8.2,
    ],
];
echo " La informacion de Mr Michi es: Edad: " . $alumnos['Esteban']['edad'] ;