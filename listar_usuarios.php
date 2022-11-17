<?php
    include("conexao.php");

    $comando = $pdo->prepare("SELECT id_usuario, nome_usuario, foto_usuario FROM usuario;");

    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $lista_user = $comando->fetchAll();
    }

    unset($comando);
    unset($pdo);
?>