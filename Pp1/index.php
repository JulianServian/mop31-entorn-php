<?php

function miNombre()
{
    return "Julián Servián Guanes";
}

function miDescripcion()
{
    return "Me llamo Julián Servián Guanes, tengo 19 años y estudio el segundo curso del ciclo de Desarrollo 
    de Aplicaciones Web, conocido como DAW2, en la FP Llefià. Ya estudié aquí pero lo dejé, y ahora quiero 
    seguir avanzando. Durante el curso haremos HTML, CSS, PHP, React, frameworks, bases de datos y otras 
    herramientas que nos ayudarán a entender mejor cómo funciona una aplicación web, tanto por la parte visual 
    (frontend) como por la parte del servidor (backend). Me considero una persona con ganas de seguir aprendiendo 
    y estoy decidido a sacarme este curso para mejorar mis habilidades. Esta tarjeta es una pequeña presentación 
    personal y también una práctica para aplicar conceptos básicos de PHP, como las variables, las funciones y la
    impresión de datos dentro de una página web.";
}

$nombre = miNombre();
$edad = 19;
$curso = "DAW2";
$colegio = "Fp llefia";
$foto = "img/julian.jpg";
$logo = "img/logollefia.png";
$fecha = date("d/m/Y");

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
            <div class="column column-profile">
                <img src="<?php echo $foto; ?>" alt="Foto de <?php echo $nombre; ?>">
                <h2><?php echo $nombre; ?></h2>
            </div>

            <div class="column description">
                <h2>Sobre mi</h2>
                <p><?php echo miDescripcion(); ?></p>
            </div>
        </div>
    </main>

    <footer>
        <?php echo miNombre(); ?> - <?php echo $curso; ?>
        <p>La fecha de hoy es <?php echo $fecha; ?></p>
    </footer>

</body>
</html>