<?php
$inicio = 50;
$fin = 500;
$salto = 2;
?>
<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nombres parells del 50 al 500</title>
    <link rel="stylesheet" href="ex1.css">
</head>
<body>
	<main>
		<h1>Nombres parells del <?php echo $inicio; ?> al <?php echo $fin; ?></h1>
		<div class="nombres">
			<?php for ($num = $inicio; $num <= $fin; $num += $salto) { ?>
				<div class="nombre"><?php echo $num; ?></div>
			<?php } ?>
		</div>
	</main>
</body>
</html>
