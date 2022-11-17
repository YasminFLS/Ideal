<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];

    //comando sql.
    $comando = $pdo->prepare('DELETE FROM usuario WHERE id_usuario = :codigo;');

    $comando->bindValue(':codigo',$codigo);
    //executa a consulta no banco de dados.
    $comando->execute();

    header("location:lista_usuarios_adm.php");

    unset($comando);
    unset($pdo);
?>