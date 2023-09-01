<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>

<?php

if(isset($_GET['pedra'])) {


    $nome = $_GET['nome'];


    $rand = rand(1, 3);  

	if ($rand == 1)
	{
		echo $nome, ', Você empatou. O computador também escolheu pedra.<br><img src="pedra.png" alt="Pedra">   vs    <img src="pedra.png" alt="Pedra">';
	}
	else if ($rand == 2) {
		echo $nome, ', Você perdeu. O computador escolheu papel.<br><img src="pedra.png" alt="Pedra">   vs    <img src="papel.png" alt="Papel">';
	}
    else if ($rand == 3) {
		echo $nome, ', Você ganhou. O computador escolheu tesoura.<br><img src="pedra.png" alt="Pedra">   vs    <img src="tesoura.png" alt="Tesoura">';
	}
}

if(isset($_GET['papel'])) {


    $nome = $_GET['nome'];


    $rand = rand(1, 3);  

	if ($rand == 1)
	{
		echo $nome, ', Você ganhou. O computador escolheu pedra.<br><img src="papel.png" alt="Papel">   vs    <img src="pedra.png" alt="Pedra">';
	}
	else if ($rand == 2) {
		echo $nome, ', Você empatou. O computador também escolheu papel.<br><img src="papel.png" alt="Papel">   vs    <img src="papel.png" alt="Papel">';
	}
    else if ($rand == 3) {
		echo $nome, ', Você perdeu. O computador escolheu tesoura.<br><img src="papel.png" alt="Papel">   vs    <img src="tesoura.png" alt="Tesoura">';
	}
}


if(isset($_GET['tesoura'])) {


    $nome = $_GET['nome'];


    $rand = rand(1, 3);  

	if ($rand == 1)
	{
		echo $nome, ', Você perdeu. O computador escolheu pedra.<br><img src="tesoura.png" alt="Tesoura">   vs    <img src="pedra.png" alt="Pedra">';
	}
	else if ($rand == 2) {
		echo $nome, ', Você ganhou. O computador escolheu papel.<br><img src="tesoura.png" alt="Tesoura">    vs    <img src="papel.png" alt="Papel">';
	}
    else if ($rand == 3) {
		echo $nome, ', Você empatou. O computador também escolheu tesoura.<br><img src="tesoura.png" alt="Tesoura">    vs    <img src="tesoura.png" alt="Tesoura">';
	}
}


?>
    
</body>
</html>