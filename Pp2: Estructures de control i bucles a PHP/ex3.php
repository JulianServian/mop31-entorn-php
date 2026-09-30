<?php
$nombre = rand(0, 100);
$esParell = $nombre % 2 === 0;
$resultat = $esParell ? 'parell' : 'senar';
$classe = $esParell ? 'parell' : 'senar';
?>
<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nombre aleatori parell o senar</title>
	<style>
		* { box-sizing: border-box; }

		body {
			display: grid;
			min-height: 100vh;
			margin: 0;
			padding: 1.5rem;
			place-items: center;
			background: #f3f6f4;
			color: #18352c;
			font-family: "Trebuchet MS", sans-serif;
		}

		main { width: min(100%, 520px); text-align: center; }
		h1 { margin: 0 0 1.5rem; font-size: clamp(1.7rem, 5vw, 2.5rem); }

		.resultat {
			padding: 2.5rem 1rem;
			border: 1px solid;
			border-radius: 8px;
		}

		.parell { background: #dcefe4; border-color: #8ebba0; color: #174d32; }
		.senar { background: #fff0d8; border-color: #d9b36c; color: #704b13; }
		.nombre { display: block; font-size: clamp(4rem, 18vw, 7rem); font-weight: 700; line-height: 1; }
		.tipus { margin: 0.8rem 0 0; font-size: 1.2rem; }

		a { display: inline-block; margin-top: 1.5rem; color: #286448; }
		a:focus-visible { outline: 2px solid #20734e; outline-offset: 4px; }
	</style>
</head>
<body>
	<main>
		<h1>Nombre aleatori</h1>
		<div class="resultat <?php echo $classe; ?>" aria-live="polite">
			<span class="nombre"><?php echo $nombre; ?></span>
			<p class="tipus">El nombre és <?php echo $resultat; ?>.</p>
		</div>
		<a href="index.php">Torna a la portada</a>
	</main>
</body>
</html>
