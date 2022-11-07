<?php
    include("conexao.php");

    $codigo = $_POST['codigo'];

    //comando sql.
    $comando->prepare('DELETE FROM quiz WHERE id_resultado = :codigo;');
    //executa a consulta no banco de dados.
    $comando->execute();

    header("location:informacoes_usuario.php");

    unset($comando);
    unset($pdo);
?>