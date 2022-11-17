<?php
    include("conexao.php");

    $nome = $_POST["nome"];
    $comando = $pdo -> prepare("INSERT INTO usuario (nome_usuario) VALUES(:nome)");
    $comando->bindValue(":nome",$nome);                                      
    $comando->execute();
    
    header("location: lista_usuarios_adm.php");
?>