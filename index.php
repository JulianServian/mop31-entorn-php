<?php

$nombre = "Julián";
$edad = 19;
$curso = "DAW2";
$colegio = "Fp llefia";
$foto = "/img/julian.png";

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
        <h1>FP Llefià</h1>
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
        </div>
    </main>

    <footer>
        <?php echo $nombre; ?> - <?php echo $curso; ?>
    </footer>

</body>
</html>