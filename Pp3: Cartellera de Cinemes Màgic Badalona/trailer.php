<?php
require __DIR__ . "/pelicules.php";

if (isset($_GET["id"]) && isset($pelicules[$_GET["id"]])) {
    $id = $_GET["id"];
    $pelicula = $pelicules[$id];
} else {
    $pelicula = null;
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tràiler</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <header class="cabecera">
        <div class="barra">
            <a class="logo" href="index.php">OCINE <span>MÀGIC</span></a>
            <nav><a href="index.php">Tornar a la cartellera</a></nav>
        </div>
    </header>

    <main class="contenedor">
        <?php if ($pelicula == null) { ?>
            <h2>Pel·lícula no trobada</h2>
        <?php } else { ?>
            <h2><?php echo $pelicula["nom"]; ?></h2>
            <?php if ($pelicula["trailer"] != "") { ?>
                <iframe class="video" src="<?php echo $pelicula["trailer"]; ?>?autoplay=1&mute=1" title="Tràiler de <?php echo $pelicula["nom"]; ?>" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <?php } else { ?>
                <p>El tràiler encara no està disponible.</p>
            <?php } ?>
        <?php } ?>

        <p><a href="index.php">Tornar a la cartellera</a></p>
    </main>
</body>
</html>
