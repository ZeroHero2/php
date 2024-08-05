<?php
// Ejercicio de michis 
// 3 michis nombre, ocupacion, color y comida subdivididas en comidas favoritas y las que no les gustan
$michis = [
    $Alberto = [
        'nombre' => 'Alberto',
        'ocupacion' => 'Dormir',
        'color' => 'Blanco',
        'comida' => [
            'favorita' => 'Pescado',
            'no_gusta' => 'Verduras'
        ]
    ],

    $Ramses = [
        'nombre'=> 'Ramses',
        'ocupacion'=> 'Pelear',
        'color' => 'Blanco/negro',
        'comida' => [
            'favorita' => 'salmon',
            'no_gusta' => 'pimiento' 
        ]
    ],

    $Rogelio = [
        'nombre'=> 'Rogelio',
        'ocupacion'=> 'jugar',
        'color' => 'Dorado',
        'comida' => [
            'favorita' => 'carne',
            'no_gusta' => 'croquetas' 
        ]
    ],

];

echo "La comida favorita de Rogelio es: {$michis[2]['comida']['favorita']}";