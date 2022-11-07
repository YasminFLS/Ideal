<?php
    include("conexao.php");

    $comando = $pdo -> prepare("SELECT nome_profissional FROM profissional WHERE id_profissional = :id_profissional");

    $comando->bindValue(":id_profissional", $_SESSION["id_profissional"]);
    $comando->execute();

    if($comando->rowCount() >= 1)
{

    $lista_profissiona = $comando->fetch();


    unset($comando);
    unset($pdo);
?>