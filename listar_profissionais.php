<?php
    include("conexao.php");

    $comando = $pdo->prepare("SELECT id_profissional, nome_profissional, telefone_profissional FROM profissional;");

    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $lista_profissional = $comando->fetchAll();
    }

    unset($comando);
    unset($pdo);
?>