<?php session_start(); ?>
<?php
include("listar_usuario.php");

session_start();
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo_perfil.css">
    <title>Perfil</title>
</head>
<body>

    
    <div class="cabecalho">
        <a href="inicio_com_conta.html"><img class="logo" src="imagens/logo.png" height="40px"></a>
        <a href="Agendamentos.html"><img class="agendamento" src="imagens/Agendamento.png" height="40px"></a>
        <a href="quiz_com_conta.php"><img class="quiz" src="imagens/quiz.png" height="40px"></a>
        <a href="Perfil.php"><img class="ima" src="imagens/imagem.jpg" height="40px"></a>
    </div>

        <img class="imagem_edit" src="<?php echo $usuario['foto_usuario']; ?>"  height="40px">
        

  

    <form action="editar_usuario.php?codigo=<?php echo $codigo?>" method="POST" enctype="multipart/form-data">

    <input class="botao_foto" type="file" name="imagem" multiple accept="image/*">

    <input class="botao_usu" name="nome" type="text" placeholder="Nome do Usuário" value="<?php echo $usuario['nome_usuario']; ?>" required name=nome title="Nome é obrigatório">

    <input class="botao_sen" name="senha" type="password" placeholder="Senha" value="">

    <input class="botao_tel" name="telefone" type="text" placeholder="Telefone" value="<?php echo $usuario['telefone_usuario']; ?>">

    <input class="botao_rua" name="rua" type="text" placeholder="Rua" value="<?php echo $usuario['rua_usuario']; ?>">

    <input class="botao_bai" name="bairro" type="text" placeholder="Bairro" value="<?php echo $usuario['bairro_usuario']; ?>">

    <input class="botao_bio" name="bio" type="text" placeholder="Biografia" value="<?php echo $usuario['bio_usuario']; ?>">

    <input class="botao_fin" type="submit" name="submit" value="Alterar">
    </form>
    

</body>
</html>