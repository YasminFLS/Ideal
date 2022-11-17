<?php
include("listar_usuarios.php");

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão Banco de Dados</title>
</head>
<body>
    <!--O action determina para onde será enviado os dados do formulário.-->
    <form action="listar_usuarios.php?codigo=<?php echo $_GET['codigo'];?>" method="POST" enctype="multipart/form-data">
        <label>Nome:</label>
        <br>
        <input type="text" name="nome" value="Nome">
        <br>
        <input type="submit" value="Atualizar" name="submit">
    </form>
    <br>
    <a href="lista_usuarios_adm.php">Voltar</a>
</body>
</html>