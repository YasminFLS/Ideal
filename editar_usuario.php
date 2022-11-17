<?php
    session_start();   
    include("conexao.php");

    $sql = "UPDATE usuario SET nome_usuario = :nome, telefone_usuario = :telefone, ";

    $codigo = $_GET['codigo'];
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $rua = $_POST["rua"];
    $bairro = $_POST["bairro"];
    $bio = $_POST["bio"];

    if(!empty($_POST["senha"])){
        $senha = MD5($_POST["senha"]);
        $sql = $sql . "senha_usuario = :senha, ";
    }    
    
echo $_FILES['imagem']['name'];

   if(!empty($_FILES['imagem']['name'])){
    $imagem = $_FILES['imagem'];  
    $extensao = pathinfo($imagem['name'], PATHINFO_EXTENSION);
    $conteudo = file_get_contents($imagem['tmp_name']);
    $base64 = "data:".$extensao.";base64,".base64_encode($conteudo);
    $sql = $sql .  " foto_usuario = :conteudo, ";
    $_SESSION['foto_usuario'] = $base64; 
   }

    $sql = $sql . " rua_usuario = :rua, bairro_usuario = :bairro, bio_usuario = :bio WHERE id_usuario = :codigo;";

    //comando sql.
    $comando = $pdo->prepare($sql);

    //insere valores das variaveis no comando sql.
    $comando->bindValue(':codigo',$codigo);
    $comando->bindValue(':nome',$nome);
    $comando->bindValue(':telefone',$telefone);    
    $comando->bindValue(':rua',$rua);
    $comando->bindValue(':bairro',$bairro);
    $comando->bindValue(':bio',$bio);
    

    if(!empty($_POST["senha"])){
       $comando->bindValue(':senha',$senha);
    }

    if(!empty($_FILES['imagem']['name'])){
       $comando->bindValue(':conteudo',$base64);
    }

    //executa a consulta no banco de dados.
    $comando->execute();
   
    $_SESSION['nome_usuario'] = $nome;   
      

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);

    header("location:Perfil.php");
?>