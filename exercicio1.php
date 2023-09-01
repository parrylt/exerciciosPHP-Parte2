<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>

<?php

if(isset($_GET['numero'])) {


	$numero = $_GET['numero'];

	if ($numero < 0)
	{
		echo 'Você digitou o número ', $numero, '. Valor Negativo.';
	}
	else if ($numero == 0) {
		echo 'Você digitou o número ', $numero, '. Valor Igual a Zero.';
	}
    else if ($numero > 0) {
		echo 'Você digitou o número ', $numero, '. Valor Positivo.';
	}
}


?>
    
</body>
</html>