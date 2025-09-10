
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

 echo"Essa palavra ivertida fica {$palavraInvertida}<br>";
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

    echo "Sua nova senha é {$senha}";

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


// 12. Função de conexão com banco
// Crie uma função que retorne um objeto PDO conectado ao banco

function conexao() {

$dsn = 'mysql:dbname=db_form;host=127.0.0.1';
$usuario = "root";
$senha = "";

  return new PDO($dsn, $usuario, $senha);

}

$conn = conexao();


// 13. Função inserir usuário
// Crie uma função que receba nome e email e insira na tabela usuarios.

function inserir($nome,$email,$conexao2){


    $scriptInserir = "INSERT INTO 
    tb_form(
        nome,
        email
    )
    VALUES(
        {$nome},
        {$email}
    )";
    
    $resultado_Inserir = $conexao2->prepare($scriptInserir);
   
}
inserir('tais','tais@123',$conn);



// 14.Função listar usuários
// Crie uma função que recebe o nome de uma tabela e retorne todos os dados 
// dela

function listar($tabela_lista,$conexao2 ){


    $script = "SELECT * FROM  {$tabela_lista}";

    $resultado = $conexao2->query($script)->fetchAll();

    echo '<pre>';
    // var_dump($res);

}

listar('tb_sala',$conn);
// 15. Função buscar usuário por ID
// Crie uma função que receba um nome de tabela e um id e retorne os dados 
// correspondente.

function buscar($nome_tabela, $id = 2,$conexao2){

     $scriptID = "SELECT * FROM {$nome_tabela} WHERE id = {$id}";    

     $resultado_id = $conexao2->query($scriptID)->fetchAll();    
}

buscar('tb_sala','2',$conn);



// 16. Função excluir usuário
// Crie uma função que receba nome de tabela e um id e exclua o usuário do 
// banco

function excluir($nome_tabela,$id,$conexao2){

   $scriptDeletar = "DELETE * FROM {$nome_tabela} WHERE id ={$id}";
   
   $resultado_Deletar = $conexao2->prepare($scriptDeletar);

}

excluir('tb_sala','3',$conn);