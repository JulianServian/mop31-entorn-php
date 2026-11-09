<?php
$nombre = rand(1, 100);
$totalDivisors = 0;

for ($divisor = 1; $divisor <= $nombre; $divisor++) {
	if ($nombre % $divisor === 0) {
		$totalDivisors++;
	}
}

$esPrimer = $totalDivisors === 2;
?>
<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Divisors i nombres primers</title>

</head>
<body>
	<main>
		<h1>Divisors del <?php echo $nombre; ?></h1>
		<div class="divisors">
			<?php for ($divisor = 1; $divisor <= $nombre; $divisor++) { ?>
				<?php if ($nombre % $divisor === 0) { ?>
					<div class="divisor"><?php echo $divisor; ?></div>
				<?php } ?>
			<?php } ?>
		</div>

		<?php if ($esPrimer) { ?>
			<p>El <?php echo $nombre; ?> és un nombre primer.</p>
		<?php } else { ?>
			<p>El <?php echo $nombre; ?> no és un nombre primer.</p>
		<?php } ?>

		<a href="index.php">Torna a la portada</a>
	</main>
</body>
</html>