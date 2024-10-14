<?php
// --------------------- Creacion de sesiones ------------------------
// Creamos la variable en algun momento
session_start();
$_SESSION['nombre'] = 'Recibos';

// Comprobamos si existe con isset
if (isset($_SESSION['apodo'])){
    echo 'Hola' . $_SESSION['apodo'] ;
} else{
    // En caso contrario redirifimos al visitante a otra pagina
    header('Location: http://dragonball.jp/login.php');
    die();
    // Cuando hagas una redirección con header() siempre termina con un die() o exit(). Evitarás problemas de seguridad
}

// --------------------- Borrado de sesiones ------------------------
session_start();
session_destroy();