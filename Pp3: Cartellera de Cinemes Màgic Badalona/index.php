<?php
require __DIR__ . "/pelicules.php";
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartellera - Cinemes Màgic Badalona</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <header class="cabecera">
        <h1>Cartellera de Cinemes Màgic Badalona</h1>
    </header>

    <main class="contenedor">
        <div class="tarjetas">
            <?php foreach ($pelicules as $id => $pelicula) { ?>
                <article class="tarjeta">
                    <div class="cartell">
                        <?php if ($pelicula["imatge"] != "") { ?>
                            <img src="<?php echo $pelicula["imatge"]; ?>" alt="Cartell de <?php echo $pelicula["nom"]; ?>">
                        <?php } else { ?>
                            <p>Imatge no disponible</p>
                        <?php } ?>
                    </div>
                    <div class="contingut">
                        <h2><?php echo $pelicula["nom"]; ?></h2>
                        <p>Horaris:</p>
                        <ul>
                            <?php foreach ($pelicula["horaris"] as $hora) { ?>
                                <li><?php echo $hora; ?></li>
                            <?php } ?>
                        </ul>
                        <div class="botons">
                            <a class="boto" href="trailer.php?id=<?php echo $id; ?>">Veure tràiler</a>
                            <a class="boto boto-secundari" href="detall.php?id=<?php echo $id; ?>">Més informació</a>
                        </div>
                    </div>
                </article>
            <?php } ?>
        </div>
    </main>
</body>
</html>
