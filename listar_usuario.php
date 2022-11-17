<?php
    include("conexao.php");

    session_start();
    $codigo = $_SESSION['id_usuario'];     
    

    //comando sql.
    $comando = $pdo->prepare("SELECT nome_usuario, senha_usuario, telefone_usuario, rua_usuario, bairro_usuario, bio_usuario, foto_usuario FROM usuario WHERE id_usuario = :codigo");
    
    //insere valores das variaveis no comando sql.
    $comando->bindValue('codigo',$codigo);

    //executa a consulta no banco de dados.
    $comando->execute();

    //Verifica se existe pelo menos um registro na tabela.
    if($comando->rowCount() >= 1)
    {
        //o fetch() transforma o retorno em um vetor (Use para um registro).
        $usuario = $comando->fetch();
    }else{
        echo("Não há usuários cadastrados.");
    }


    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
