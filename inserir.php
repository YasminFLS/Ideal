<?php
    include("conexao.php");

    $nome = $_POST["nome"];
    $senha = MD5($_POST["senha"]);
    $telefone = $_POST["telefone"];
    $comando = $pdo -> prepare("INSERT INTO usuario(nome_usuario,senha_usuario,telefone_usuario) VALUES(:nome,:senha,:telefone)");
    $comando->bindValue(":nome",$nome);                                     
    $comando->bindValue(":senha",$senha);
    $comando->bindValue(":telefone",$telefone);  
    $comando->execute();                               

    header("location: Login.html");
?>

