<?php

require_once __DIR__ . "/../includes/iniciar.php";

$nombreResiduos = [
    "papel" => "Papel",
    "periodico" => "Periódico",
    "botella" => "Botella",
    "tarro" => "Tarro",
    "lata" => "Lata",
    "manzana" => "Manzana"
];

$residuoActual = $_SESSION['basura'][0];

require __DIR__ . "/../includes/cabecera.php";

?>

<h2>Recicla coño</h2>

<h3>Residuo que tienes que reciclar:</h3>

<h1>
    <?php echo $nombreResiduos[$residuoActual]; ?>
</h1>
  
<p>
    Residuos en la cola:
    <?php echo count($_SESSION['basura']); ?>
</p>

<h3>Elige el contenedor:</h3>

<form action="funciones.php" method="POST">

    <button type="submit" name="contenedor" value="papel">
        Papel
    </button>

    <button type="submit" name="contenedor" value="vidrio">
        Vidrio
    </button>

    <button type="submit" name="contenedor" value="plastico">
        Plástico
    </button>

    <button type="submit" name="contenedor" value="organico">
        Orgánico
    </button>

    <input type="hidden" name="accion" value="reciclar">

</form>

<hr>

<h3>Estado de los contenedores</h3>

<?php foreach ($_SESSION['contenedores'] as $nombre => $cantidad) { ?>

    <p>
        <?php echo ($nombre); ?>:
        <?php echo $cantidad; ?> / <?php echo $capacidadMaxima; ?>
    </p>

<?php } ?>

<h3>Residuos reciclados: <?php echo $_SESSION['reciclados']; ?></h3>

<?php

// Mensaje 
if (isset($_SESSION['mensaje'])) {

    echo "<p>" . $_SESSION['mensaje'] . "</p>";

    unset($_SESSION['mensaje']);
}

?>

<hr>

<form action="funciones.php" method="POST">
    <input type="hidden" name="accion" value="vaciar">
    <button type="submit">Vaciar contenedores</button>
</form>

<form action="reiniciar.php" method="POST">
    <button type="submit">Reiniciar partida</button>
</form>

<?php require __DIR__ . "/../includes/pie.php"; ?>
