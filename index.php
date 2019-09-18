<?php
	require ('funcoes.php');

	$contadores = buscarContadores();

	/*foreach ($contadores as $c) 
	{
		echo '<p>' . $c['nome'] . '</p>';	
	}*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<title>Contador App</title>

</head>
<body>
	
	<header>
		<h1>Contador de coisas</h1>
	</header>

	<main>
		<div id="container">
		<?php foreach ($contadores as $c ): ?>
			
			<div class="contador">
				<button class="bot">⊖</button>
				<div>
					<p class="nome"><?= $c['nome'] ?></p>
					<p class="num"><?= $c['numero'] ?></p>
				</div>
				<button class="bot">⊕</button>
				
			</div>
			
		<?php endforeach; ?>
			
		</div>
	</main>
	<hr>
	<footer>
		<form action="index.php" method="">
			<p><label>Novo Contador</label></p>
			<input type="text" name="ncontador">
			<button id="ad">Adicionar</button>
		</form>
	</footer>
	


</body>
</html>