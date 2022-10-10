<?php
    include("conexao.php");

    $telefone = $_POST["telefone"];
    $profissional = $_POST["profissional"];
    $comando = $pdo -> prepare("INSERT INTO profissional(nome_profissional,telefone_profissional) VALUES(:profissional,:telefone)");
    $comando->bindValue(":profissional",$profissional);                                     
    $comando->bindValue(":telefone",$telefone);  
    $comando->execute();
    
    header("location: Agendamentos_adm.html");
?>