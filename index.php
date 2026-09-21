<?php

$nombre = "Julián Servián Guanes";
$edad = 19;
$curso = "DAW2";
$colegio = "Fp llefia";
$foto = "img/julian.jpg";
$logo = "img/logollefia.png";
$descripcion = "Aquesta pàgina hola.php forma part de la pràctica 1 del mòdul 7. En el fitxer index.php, normalment s'hi defineixen les parts bàsiques d'una pàgina PHP, com ara el header, que conté informació inicial de la pàgina, així com el logo o títol, i el body, on es mostren els continguts principals. També es pot veure l'estructura de columnes que separen les diferents seccions del disseny.";
$fecha = "21/09/2026";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera aplicación PHP</title>
    <link rel="stylesheet" href="tarjeta.css">
</head>
<body>

    <header>
        <h1><img src="<?php echo $logo; ?>" alt="Logo FP Llefià"></h1>
        <p>Módulo 7 - Práctica 1. Mi primera aplicación en PHP</p>
    </header>

    <main>
        <div class="card">
            <div>
                <img src="<?php echo $foto; ?>" alt="Foto de <?php echo $nombre; ?>">
                <h2><?php echo $nombre; ?></h2>
            </div>

            <div>
                <p>Edad: <?php echo $edad; ?> años</p>
                <p>Curso: <?php echo $curso; ?></p>
                <p>Colegio: <?php echo $colegio; ?></p>
            </div>

            <div class="description">
                <p><?php echo $descripcion; ?></p>
            </div>
        </div>
    </main>

    <footer>
        <?php echo $nombre; ?> - <?php echo $curso; ?>
        <p>La fecha de hoy es <?php echo $fecha; ?></p>
    </footer>

</body>
</html>