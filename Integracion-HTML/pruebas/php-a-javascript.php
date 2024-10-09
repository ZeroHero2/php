<?php 

$usuarios = [
    array(
        "id" => 1,
        "username" => "Miguelon"
    ),
    array(
        "id" => 2,
        "username" => "Pancho"
    ),
    array(
        "id" => 3,
        "username" => "Julian"
    ),

];

$edad = 20;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Tabla del 9</h1>

<?php for ($i = 1; $i<=10 ; $i++): ?>
    
    <li> 9 x <?= $i ?> = <?= 9 * $i ?></li>

<?php endfor; ?>

<script>
    let users = JSON.parse('?<php json_encode($usuarios) ?>')
    console.log(users)
    let edad = <?= $edad ?>;
</script>


</body>
</html>