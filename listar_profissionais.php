<?php
    include("conexao.php");

    $comando = $pdo -> prepare("SELECT id_profissional, nome_profissional, telefone_profissional FROM profissional WHERE id_profissional = :id_profissional");

    $comando->bindValue(":id_profissional", $_SESSION['id_profissional']);
    $comando->execute();

    if($comando->rowCount() >= 1)
{

    $Agendamentos_adm = $comando->fetch();

}
    unset($comando);
    unset($pdo);
