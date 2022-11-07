<?php
    include("conexao.php");

    $codigo = $_POST['codigo'];

    //comando sql.
    $comando->prepare('DELETE FROM agendamentos WHERE id_agendamentos = :codigo;');
    //executa a consulta no banco de dados.
    $comando->execute();

    header("location: Agendamentos_adm.html");
?>