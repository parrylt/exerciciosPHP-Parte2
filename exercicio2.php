<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>

<?php

if(isset($_GET['parImpar'])) {


	$numero = $_GET['parImpar'];

	if ($numero % 2 == 0)
	{
		echo 'Você digitou o número ', $numero, '. Ele é número par.';
	}
	else if ($numero % 2 != 0) {
		echo 'Você digitou o número ', $numero, '. Ele é número impar.';
	}
}



?>
    
</body>
</html>