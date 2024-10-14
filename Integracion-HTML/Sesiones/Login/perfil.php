<?php
// Comprobar que la session existe
session_start();
if(!isset($_SESSION['nombre'])){
    header('Location: login.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <h1>Bienvenido <? $_SESSION['nombre'] ?> </h1>

    <a href="logout.php">Cerrar sesion</a>

    
</body>
</html>