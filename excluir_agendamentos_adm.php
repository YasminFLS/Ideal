<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];

    //comando sql.
    $comando->prepare('DELETE FROM profissional WHERE id_profissional = :codigo;');
    //executa a consulta no banco de dados.
    $comando->execute();

    header("location:Agendamentos_adm.php");

    unset($comando);
    unset($pdo);
?>