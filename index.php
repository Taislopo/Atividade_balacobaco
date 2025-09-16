
<?php

// // . Função de boas-vindas
// Crie uma função que receba o nome de uma pessoa e retorne a frase:
// // "Bem-vindo, [nome]!"


function nome($nome){

 echo'Bem vindo '. $nome;

}

nome('Paulo<br>');

// . Função de par ou ímpar
// Crie uma função que receba um número e retorne se ele é par ou ímpar

 function par_impar($num){

    if($num%2==0){

        echo" Esse numero é PAR<br>";
    }

    else{

        echo" Esse numero é IMPAR<br>";
    }
 }

 par_impar(42);

//  . Função de maior número
// Crie uma função que receba 3 números e retorne qual deles é o maior

function  maior($num1, $num2, $num3){

    if($num1>$num2 && $num1>$num3){

        echo"{$num1} é o numero MAIOR<br>";
    }

    else if($num2>$num1 && $num2>$num3){

        echo"{$num2} é o numero MAIOR<br>";
    }

    else{
        echo"{$num3} é o numero MAIOR<br>";
    }

}

maior(20,41,100);

// 6. Função de inverter string
// Crie uma função que receba uma palavra e retorne ela invertida.

function inversao($palavra){

    //strrev() funcao que Retorna a string invertida. 
 $palavraInvertida = strrev($palavra);

 echo"Essa palavra invertida fica {$palavraInvertida}<br>";
}

inversao("Tais");


// 7. Função de contar vogais
// Crie uma função que receba uma string e retorne a quantidade de vogais nela.

function vogais($palavra){


    $array_palavra = str_split($palavra);
    
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    
    $contador = 0;

  foreach ($array_palavra as $linha){
    foreach($vogais as $linha2){
     
        if($linha == $linha2){
            $contador = $contador+ 1;
        }      
    }
  }

  echo"A quantidade de vogais na {$palavra} é {$contador}<br>";

}

vogais('tais');

// 9. Função geradora de senhas
// Crie uma função que receba um número (tamanho da senha) e retorne uma 
// senha aleatória usando letras e números

function senha($palavra){
    
    $tamanho=strlen($palavra); 
     
    

    $senha = str_shuffle($tamanho);

    echo "Sua nova senha é {$senha}<br>";

}
senha('palavra');


// 10. Função de formatar CPF
// Crie uma função que receba um número de 11 dígitos e retorne no formato:
// 000.000.000-00.

function formato($numero){



}


// 11. Função de conversão
// Crie uma função que receba um valor em real (R$) e faça a conversão para 
// dólar (US$), usando um parâmetro para a cotação.

function conversao($valor){



}



// 18. Crie uma função que verifique se uma letra é vogal ou consoante.

function cons_vogal($dado){

    $array_palavra = str_split($dado);
    
    $vogais = ['a', 'e', 'i', 'o', 'u'];

  foreach ($array_palavra as $linha){
    foreach($vogais as $linha2){
     
        if($linha == $linha2){
            $vogal = str_split($linha);
            echo "{$vogal} é Vogal<br>";

        }      
        else{
            $consoante = str_split($linha);
            echo "{$consoante} é Consoante<br>";
            
        }
    }
  }

 
}

cons_vogal('corno');