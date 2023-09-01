<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>

<?php

if(isset($_GET['numero1'])) {


	$numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

	if ($numero1 > $numero2)
	{
		echo 'O número A: ', $numero1, ' é maior que o número B: ', $numero2, ' que você digitou';
	}
	else if ($numero1 < $numero2)
	{
		echo 'O número B: ', $numero2, ' é maior que o número A: ', $numero1, ' que você digitou';
	}
}



?>
    
</body>
</html>