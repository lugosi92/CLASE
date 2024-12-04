<?php
include 'constants.php';
session_start(); 

$valor_text = $_SESSION[TEXTO_BUSCAR];
$valor_tipo_busqueda = $_SESSION[TIPO_BUSQUEDA];
$valor_genero = $_SESSION[GENERO];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario simple. Resultados</h1>
    <p>Estos son los resultados introducidos:</p>
    <ul>
        <li>Texto de busqueda: <?php echo $valor_text;?></li>
        <li>Buscar en: <?php echo $valor_tipo_busqueda;?></li>
        <li>Género: <?php echo $valor_genero;?></li>
    </ul>
    <?php
        session_destroy(); // Destruyo la sesion
    ?>
    <a href="index.php">Nueva busqueda</a>
</body>
</html>