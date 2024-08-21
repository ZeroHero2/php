<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $se_habla_de_bruno = true;
    if (true){
        echo "<p> Esta condicion es verdadera </p>" ;
    }
    ?>


    
    <h1>Esto se debe de hacer</h1>
    <?php if ($se_habla_de_bruno): ?>
        <b>😊</b>
    <?php else:  ?>
        <b>😒</b>
    <?php endif; ?>
</body>
</html>