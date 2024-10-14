<?php
// cambiar nombre de la sesion 
session_name("CON"); // Se crea una sesion llamada con 
// session_id("php"); //id de mi sesion (valor)
session_start();
// manejar los recargos de sesion
if (isset($_SESSION['contador'])){
    $_SESSION['contador']++;
}else{
    $_SESSION['contador']=1;
}
// variables de sesion
// $_SESSION['contador'] = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones en php</title>
</head>
<body>
    //<?php echo "Has recargado la pagina " . $_SESSION['contador'] . " veces"; ?>
    <p>Hola</p>
</body>
</html>