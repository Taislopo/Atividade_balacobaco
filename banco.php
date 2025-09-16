<?php
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
        :nome,
        :email
      
    )";
    
    $resultado_Inserir = $conexao2->prepare($scriptInserir)->execute([
           ':nome'=>$nome,
           ':email'=>$email

    ]);
   var_dump($resultado_Inserir);

}
inserir('tais','tais@123',$conn);



// 14.Função listar usuários
// Crie uma função que recebe o nome de uma tabela e retorne todos os dados 
// dela

function listar($tabela_lista,$conexao2 ){


    $script = "SELECT * FROM  {$tabela_lista}";

    $resultado = $conexao2->query($script)->fetchAll();

    echo '<pre>';
     var_dump($script);

}

listar('tb_form',$conn);
// 15. Função buscar usuário por ID
// Crie uma função que receba um nome de tabela e um id e retorne os dados 
// correspondente.

function buscar($nome_tabela, $id,$conexao2){

     $scriptID = "SELECT * FROM {$nome_tabela} WHERE id_form = {$id}";    

     $resultado_id = $conexao2->query($scriptID)->fetchAll();   
     var_dump($scriptID);
     
}

buscar('tb_form','2',$conn);



// 16. Função excluir usuário
// Crie uma função que receba nome de tabela e um id e exclua o usuário do 
// banco

function excluir($nome_tabela,$id,$conexao2){



   $scriptDeletar = "DELETE * FROM :tb_form WHERE id_form = :id_form";
   
   $resultado_Deletar = $conexao2->prepare($scriptDeletar)->execute([
          ':id_form'=>$id,
          ':tb_form'=>$nome_tabela
   ]);

}

excluir('tb_form','1',$conn);
