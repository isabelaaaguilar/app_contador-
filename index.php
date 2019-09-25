<?php
	require ('funcoes.php');

	/*foreach ($contadores as $c) 
	{
		echo '<p>' . $c['nome'] . '</p>';	
	}*/

	//echo $_POST ['acao'];
	if (!empty($_POST['acao'])) 
	{
		if ($_POST['acao'] == "adicionar") 
		{
			criarContador($_POST['ncontador']);
		}

		else if ($_POST['acao'] == "mais")
		{
			incrementarContador($_POST['id']);
		}

		else if ($_POST['acao'] == "menos")
		{
			decrementarContador($_POST['id']);
		}
		else if ($_POST['acao'] == "del")
		{
			deletarContador($_POST['id']);
		}
	}

	$contadores = buscarContadores();	
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
			
			<form action="index.php" method="POST" class="contador" id="me">
				<button class="bot" name="acao" value="menos">⊖</button>
				<div>
					<p class="nome"><?= $c['nome'] ?></p>
					<p class="num"><?= $c['numero'] ?></p>
					<p><button name="acao" value="del" class="del2"><img src="imagem/trash.png"></button></p>
				</div>
				<button class="bot" name="acao" value="mais" id="ma">⊕</button>
				<input type="hidden" name="id" value="<?= $c['codigo'] ?>">
			</form>
			
		<?php endforeach; ?>
			
		</div>
	</main>
	<hr>
	<footer>
		<form action="index.php" method="POST">
			<p><label>Novo Contador</label></p>
			<input type="text" name="ncontador">
			<button id="ad" name="acao" value="adicionar">Adicionar</button>
		</form>
	</footer>
	


</body>
</html>