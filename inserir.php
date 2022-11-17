<?php
    include("conexao.php");

    $nome = $_POST["nome"];
    $senha = MD5($_POST["senha"]);
    $telefone = $_POST["telefone"];
    $base64 = "data:".$extensao.";base64,".base64_encode($conteudo);
    $comando = $pdo -> prepare("INSERT INTO usuario(nome_usuario,senha_usuario,telefone_usuario,foto_usuario) VALUES(:nome,:senha,:telefone,:conteudo)");
    $comando->bindValue(":nome",$nome);                                     
    $comando->bindValue(":senha",$senha);
    $comando->bindValue(":telefone",$telefone);
    $comando->bindValue(":conteudo", $base64);
    $comando->execute();                               

    header("location: Login.html");
?>

