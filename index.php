<?php
echo "<h1>PHP - Aula 02 </h1>";
echo "<h2>Trabalhando com operadores</h2>";
echo"<hr>";

$nome = "Daniel Santos";
$idade = "40";
$altura = 1.65;
$fumante = true;

echo "Nome :" .$nome;
echo "<br>";
echo  "Idade :" .  $idade;
echo "<br>";
echo "Altura :" . $altura;
echo "<br>";
echo "Fumante :" . $fumante;
echo "<br>";

echo $nome . " - ". $idade ." - ". $altura . " - ". $fumante;

echo "<hr>";

echo gettype($nome) . "<br>";
echo gettype($altura) . "<br>";
echo gettype($idade) . "<br>";
echo gettype($fumante) . "<br>";


echo "<h1>Operadores aritmético </h1>";
 $n1 = 10;
 $n2 = 2;

 echo $n1 + $n2 . "<br>";
 echo $n1 - $n2 . "<br>";
 echo $n1 * $n2 . "<br>";
 echo $n1 / $n2 . "<br>";
 echo $n1 % 2 .   "<br>";
 echo $n1 ** 2 .  "<br>";


 echo "<h1>Operadores relacionais </h1>";
 
 echo ($n1 > $n2 ). "<br>";
 echo ($n1 >= $n2 ). "<br>";
 echo ($n1 < $n2 ). "<br>";
 echo ($n1 <= $n2 ). "<br>";
 echo ($n1 != $n2 ). "<br>";
 echo ($n1 == $n2 ). "<br>";
 
 

?>