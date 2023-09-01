<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Exercícios 2</title>
</head>
<body>


<h1>Exercício 1</h1>
<p> 1) Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".</P>
<form action="exercicio1.php" method="get">
  <div>
    <label>Diga um número aí. não vale quebrado</label>
	<br><br>
    <input type="text" name="numero" size='5' placeholder='número' required/><br><br>
	<button name="botao" type="submit">Avalie o meu número, por favor!</button>
  </div>
</form>


<h1>Exercício 2</h1>
<p>2) Solicite a entrada de um número e descubra se um número digitado é par ou ímpar.</P>
<form action="exercicio2.php" method="get">
  <div>
    <label>Diga um número aí. não vale quebrado</label>
	<br><br>
    <input type="text" name="parImpar" size='5' placeholder='número'required /><br><br>
	<button name="botao" type="submit">Avalie o meu número de novo, por favor!</button>
  </div>
</form>

<h1>Exercício 3</h1>
<p>3) Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor da variável B. A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”.</P>
<form action="exercicio3.php" method="get">
  <div>
    <label>Diga dois números aí</label>
	<br><br>
    <input type="text" name="numero1" size='5' placeholder='número' required/><br><br>
	<input type="text" name="numero2" size='5' placeholder='número' required/><br><br>
	<button name="botao" type="submit">Avalie os meus números mais uma vez, por favor!</button>
  </div>
</form>

<h1>Exercício 4</h1>
<p>4) Desenvolva um algoritmo em PHP que se 3 números informados pelo usuário foram um triangulo, e se formarem um triangulo apresente uma imagem referente ao tipo deste triangulo: isósceles, escaleno ou equilátero.</P>
<form action="exercicio4.php" method="get">
  <div>
    <label>Diga mais três números aí de possíveis medidas de lados de triângulos</label>
	<br><br>
    <input type="text" name="tri1" size='5' placeholder='número' required/><br><br>
	<input type="text" name="tri2" size='5' placeholder='número' required/><br><br>
	<input type="text" name="tri3" size='5' placeholder='número' required/><br><br>
	<button name="botao" type="submit">É qual triângulo?</button>
  </div>
</form>


<h1>Exercício 5</h1>
<p>5) Desenvolva uma aplicação em PHP que represente o jogo Jokenpô (Pedra, Papel e Tesoura), onde o usuário informa seu nome e indica em qual opção quer apostar (pedra, papel ou tesoura) e aguarda a jogada do computador (ela deverá ser automática), de acordo com as regras do Jokenpô exiba quem ganhou e as imagens referentes as escolhas do computador e o usuário.</P>
<form action="exercicio5.php" method="get">
  <div>
    <label>Jogue aí o jokenpô e informe o seu nome</label>
	<br><br>
	<input type="text" name="nome" size='10' placeholder='nome' required/><br><br>
	<button name="pedra" type="submit">Pedra</button>
	<button name="papel" type="submit">Papel</button>
	<button name="tesoura" type="submit">Tesoura</button>
  </div>
  <hr>
</form>


</body>
</html>