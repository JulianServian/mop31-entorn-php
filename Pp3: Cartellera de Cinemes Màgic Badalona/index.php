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
        <div class="barra">
            <a class="logo" href="index.php">OCINE <span>MÀGIC</span></a>
            <nav>
                <a href="index.php">Cartellera</a>
                <a href="#pellicules">Pel·lícules</a>
                <a href="https://www.ocinemagic.es/">El cinema</a>
            </nav>
        </div>
    </header>

    <section class="banner">
        <h1>Cinema per a tothom</h1>
        <p>Tria una pel·lícula i consulta els horaris.</p>
    </section>

    <main class="contenedor">
        <h2 id="pellicules">Cartellera</h2>
        <div class="tarjetas">
            <?php foreach ($pelicules as $id => $pelicula) { ?>
                <article class="tarjeta">
                    <div class="cartel">
                        <?php if ($pelicula["imatge"] != "") { ?>
                            <img src="<?php echo $pelicula["imatge"]; ?>" alt="Cartell de <?php echo $pelicula["nom"]; ?>">
                        <?php } else { ?>
                            <p>Imatge no disponible</p>
                        <?php } ?>
                    </div>
                    <div class="contenido">
                        <h2><?php echo $pelicula["nom"]; ?></h2>
                        <p>Avui, horaris:</p>
                        <div class="horarios">
                            <?php foreach ($pelicula["horaris"] as $hora) { ?>
                                <span><?php echo $hora; ?></span>
                            <?php } ?>
                        </div>
                        <div class="botones">
                            <a class="boton" href="trailer.php?id=<?php echo $id; ?>">▶ Tràiler</a>
                            <a class="boton boton-secundario" href="detall.php?id=<?php echo $id; ?>">Més informació</a>
                        </div>
                    </div>
                </article>
            <?php } ?>
        </div>
    </main>
</body>
</html>
