<?php
$inici = 1;
$final = 11;
$multiplicadorFinal = 9;
?>
<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Taules de multiplicar</title>
</head>
<body>
	<main>
		<h1>Taules de multiplicar de l'1 a l'11</h1>
		<?php for ($taula = $inici; $taula <= $final; $taula++) { ?>
			<div class="taula">
				<h2>Taula del <?php echo $taula; ?></h2>
				<?php for ($multiplicador = 1; $multiplicador <= $multiplicadorFinal; $multiplicador++) { ?>
					<p><?php echo $taula . ' × ' . $multiplicador . ' = ' . ($taula * $multiplicador); ?></p>
				<?php } ?>
			</div>
		<?php } ?>
	</main>
</body>
</html>
