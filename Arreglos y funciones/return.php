<?php
function freddy (){

    $numero_aleatorio = rand(1,4);
    $frase="";
    switch ($numero_aleatorio){
        case 1:
            $frase = "Nunca pares de aprender";
            break;
        case 2:
            $frase = "Las empresas no son familia";
            break;
        case 3:
            $frase = "La tecnologia es el futuro";
            break;
        case 4:
            $frase = "Amo PHP";
                break;
        default:
            echo "Aun no tiene frase celebre";
    }
    return $frase;

}
echo freddy();
echo "\n";