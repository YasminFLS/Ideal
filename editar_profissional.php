<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];

    //comando sql.
    $comando = $pdo->prepare("UPDATE profissional SET nome_profissional = :nome, telefone_profissional = :telefone WHERE id_profissional = :codigo;");

    //insere valores das variaveis no comando sql.
    $comando->bindValue(':codigo',$codigo);
    $comando->bindValue(':nome',$nome);
    $comando->bindValue(':telefone',$telefone);

    //executa a consulta no banco de dados.
    $comando->execute();

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);

    header("location:Agendamentos_adm.php");
?>