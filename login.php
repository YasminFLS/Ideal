<?php
    include("conexao.php");

    $nome= $_POST["nome"];
    $set_senha = $_POST["senha"];

    $comando = $pdo->prepare("SELECT id_usuario, senha_usuario, tipo_usuario FROM usuario WHERE nome_usuario = :nome");
        
    $comando->bindvalue(":nome", $nome);

    $comando->execute();

    if($comando->rowcount()== 1)
    {
        $resultado = $comando->fetch();
        
        if($resultado["senha_usuario"] == MD5($set_senha)){

            session_start();
            $_SESSION['id_usuario'] = $resultado['id_usuario'];
            $_SESSION['tipo_usuario'] = $resultado['tipo_usuario'];
            $_SESSION['loggedin'] = true;

            header("location:inicio_com_conta.php");

        }else{
            echo("Email ou senha incorreto!");
        }

    }else{
        echo("Email ou senha incorreto!");
    }

    unset($comando);
    unset($pdo);
?>