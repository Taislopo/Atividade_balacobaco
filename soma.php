<?php

// . Função de soma simples
// Crie uma função que receba dois números como parâmetros e retorne a soma 
// deles.

function soma($num1, $num2){

    $result = $num1 + $num2;
echo"A soma dos valores {$num1} e {$num2} é: {$result}<br>";

}

soma(20,22);

// 5. Função de média
// Crie uma função que receba um array de números e retorne a média

function media(){

$numeros = [100,100,100,10];

// array_sum soma os numeros do array
$soma = array_sum($numeros);

$quantidade = count($numeros);

$media = $soma/$quantidade;

   echo"A media dos numeros do array é {$media}<br>"; 
}

media();

// 8. Função de tabuada
// Crie uma função que receba um número e retorne a tabuada dele (de 1 a 10).

function tabuada($num){

 $resultado = "";
  for($i = 0;$i<=10;$i++ ){

       $resultado = $num * $i;
       
    echo"{$num} *{$i} = {$resultado}";
    echo"<br>";
  }

}
tabuada(10);

