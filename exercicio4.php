<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>

<?php

if(isset($_GET['tri1'])) {


	$tri1 = $_GET['tri1'];
    $tri2 = $_GET['tri2'];
    $tri3 = $_GET['tri3'];

	if ($tri1 == $tri2 && $tri1 == $tri3)
	{
		echo 'Você deu os angulos: <br>A: ', $tri1, '<br>B: ', $tri2, '<br>C:', $tri3, '<br>É um triângulo equilátero.<br><img src="equi.png" alt="Triângulo Equilátero">' ;
	}
	else if ($tri1 == $tri2 && $tri1 != $tri3 || $tri1 != $tri2 && $tri1 == $tri3 || $tri3 == $tri2 && $tri1 != $tri3 || $tri3 == $tri2 && $tri1 != $tri2)
	{
		echo 'Você deu os angulos: <br>A: ', $tri1, '<br>B: ', $tri2, '<br>C:', $tri3, '<br>É um triângulo isósceles.<br><img src="iso.png" alt="Triângulo Isósceles">' ;
	}
    else if ($tri1 != $tri2 && $tri1 != $tri3 && $tri2 != $tri3)
	{
		echo 'Você deu os angulos: <br>A: ', $tri1, '<br>B: ', $tri2, '<br>C:', $tri3, '<br>É um triângulo escaleno.<br><img src="esca.png" alt="Triângulo Escaleno">' ;
	}
}

?>
    
</body>
</html>