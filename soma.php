<?php

// . Função de soma simples
// Crie uma função que receba dois números como parâmetros e retorne a soma 
// deles.

function soma($num1, $num2)
{

   $result = $num1 + $num2;
   echo "A soma dos valores {$num1} e {$num2} é: {$result}<br>";
}

soma(20, 22);

// 5. Função de média
// Crie uma função que receba um array de números e retorne a média

function media()
{

   $numeros = [100, 100, 100, 10];

   // array_sum soma os numeros do array
   $soma = array_sum($numeros);

   $quantidade = count($numeros);

   $media = $soma / $quantidade;

   echo "A media dos numeros do array é {$media}<br>";
}

media();

// 8. Função de tabuada
// Crie uma função que receba um número e retorne a tabuada dele (de 1 a 10).

function tabuada($num)
{

   $resultado = "";
   for ($i = 0; $i <= 10; $i++) {

      $resultado = $num * $i;

      echo "{$num} *{$i} = {$resultado}";
      echo "<br>";
   }
}
tabuada(10);

// 17. Escreva uma função que receba, o nome de um funcionario e o valor de seu salario e aplique um aumento de acordo com a seguinte regra: salários menores que R$1000 recebem 20% de aumento, entre R$1000 e R$2000 recebem 15%, e acima de R$2000 recebem 10%.

function aumento($nome, $salario)
{

   if ($salario < 1000) {
      $aumento = $salario * 0.20;
      $novoSalario = $aumento + $salario;
      echo "o salario do funcionario {$nome}, agora com o aumento ficou {$novoSalario}<br>";
   } else if ($salario >= 1000 && $salario <= 2000) {
      $aumento = $salario * 0.15;
      $novoSalario = $salario + $aumento;
      echo "o salario do funcionario {$nome}, agora com o aumento ficou {$novoSalario}<br>";
   } else {
      $aumento = $salario * 0.10;
      $novoSalario = $salario + $aumento;
      echo "o salario do funcionario {$nome}, agora com o aumento ficou {$novoSalario}<br>";
   }
}

aumento('fernanda', 2500);




// 19. Crie uma função que receba um array de números e retorne um novo array contendo apenas os números pares.

function array_pares()
{

   $numeros = [1, 2, 3, 4, 5, 6];
   foreach ($numeros as $linha) {
      if ($linha % 2 == 0) {
         $pares = str_split($linha);
         echo "O novo array com pares é {$linha}<br>";
      }
   }
}

array_pares();


// 20. Crie uma função que receba um array de números e retorne o segundo maior número do array.

function maior()
{
   $numeroSegundo=0;
   $numeroMaior = 0;
   $numeros = [1, 2, 3, 4, 5, 6];

   foreach($numeros as $linha){
      if($linha>$numeroMaior){
         $numeroMaior = $numeroMaior;
      }
      else if($linha>$numeroSegundo && $numeroSegundo<$numeroMaior){
         $numeroSegundo = $numeroSegundo;
      }
   }

   echo"O segundo maior numero da array é {$numeroSegundo}";
}

maior();


// 21. Crie uma função que receba um array de strings e retorne um novo array contendo apenas as strings que começam com uma vogal.





// 22. Faça uma função que retorne o cubo de um número.


// 23. Faça uma função que retorne a raiz quadrada de um número.