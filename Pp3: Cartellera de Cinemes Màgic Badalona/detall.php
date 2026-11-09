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
    <title>Detall de la pel·lícula</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <header class="cabecera">
        <h1>Detall de la pel·lícula</h1>
    </header>

    <main class="contenidor">
        <?php if ($pelicula == null) { ?>
            <h2>Pel·lícula no trobada</h2>
        <?php } else { ?>
            <h2><?php echo $pelicula["nom"]; ?></h2>

            <?php if ($pelicula["imatge"] != "") { ?>
                <img class="cartell" src="<?php echo $pelicula["imatge"]; ?>" alt="Cartell de <?php echo $pelicula["nom"]; ?>">
            <?php } else { ?>
                <p>Imatge no disponible</p>
            <?php } ?>

            <p><?php echo $pelicula["sinopsi"]; ?></p>
            <dl class="dades">
                <dt>Durada</dt>
                <dd><?php echo $pelicula["durada"]; ?> minuts</dd>
                <dt>Director</dt>
                <dd><?php echo $pelicula["director"]; ?></dd>
                <dt>Repartiment</dt>
                <dd><?php echo $pelicula["repartiment"]; ?></dd>
                <dt>Qualificació</dt>
                <dd><?php echo $pelicula["edat"]; ?></dd>
                <dt>Gènere</dt>
                <dd><?php echo $pelicula["genere"]; ?></dd>
                <dt>Horaris</dt>
                <dd>
                    <?php foreach ($pelicula["horaris"] as $hora) { ?>
                        <?php echo $hora; ?><br>
                    <?php } ?>
                </dd>
            </dl>

            <?php if ($id == 10 && isset($pelicula["valoracio"])) { ?>
                <h3>Valoració</h3>
                <p class="estrelles">★★★★☆ (<?php echo $pelicula["valoracio"]; ?>/5)</p>
            <?php } ?>

            <p><a class="boto" href="trailer.php?id=<?php echo $id; ?>">Veure tràiler</a></p>

            <?php if ($id == 10 && isset($pelicula["galeria"])) { ?>
                <h3>Imatges de la pel·lícula</h3>
                <?php
                $hiHaImatges = false;
                foreach ($pelicula["galeria"] as $imatge) {
                    if ($imatge != "") {
                        $hiHaImatges = true;
                    }
                }
                ?>
                <?php if ($hiHaImatges) { ?>
                    <div class="carrusel">
                        <?php foreach ($pelicula["galeria"] as $imatge) { ?>
                            <?php if ($imatge != "") { ?>
                                <img src="<?php echo $imatge; ?>" alt="Imatge de <?php echo $pelicula["nom"]; ?>">
                            <?php } ?>
                        <?php } ?>
                    </div>
                <?php } else { ?>
                    <p>Imatges no disponibles</p>
                <?php } ?>
            <?php } ?>
        <?php } ?>

        <p><a href="index.php">Tornar a la cartellera</a></p>
    </main>
</body>
</html>
