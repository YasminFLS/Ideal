<?php
    include("conexao.php");

    $comando = $pdo->prepare("SELECT id_agendamentos, data_agenda, horario, id_profissional, id_usuario FROM agendamentos;");

    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $lista_agendamentos = $comando->fetchAll();
    }else{
        echo("Não há registros.");
    }

    unset($comando);
    unset($pdo);
?>