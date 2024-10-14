<?php
// Se comprueba que lleguen los datos al formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Variables que estan en la base de datos
    $nombreBueno = 'Usuario';
    $passwordBueno = '1234';

    // Varibales del formulario
    $nombre = isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : '';
    $password = isset($_REQUEST['password']) ? $_REQUEST['password'] : '';

    // Comprobar si los datos son correctos 
    if ($nombreBueno == $nombre && $passwordBueno == $password){
        // Si es correcto ingresamos 
        session_start();
        $_SESSION['nombre'] = $_REQUEST['nombre'];
        // Redireccionamos a la pagina segura
        header('Location: perfil.php');
        die();
    }else{
        echo ' <p style="color:red">El usuario y/o contraseña son incorrectos</p> ';
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">

        <button type="submit">Ingresar </button>

    </form>

</body>

</html>