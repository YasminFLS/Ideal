<?php session_start(); ?>
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
    <a href="inicio_com_conta.php"><img class="logo" src="imagens/logo.png" height="40px"></a>
        <a href="Agendamentos.html"><img class="agendamento" src="imagens/Agendamento.png" height="40px"></a>
        <a href="quiz_com_conta.php"><img class="quiz" src="imagens/quiz.png" height="40px"></a>
        <img class="ima" src="<?php echo $_SESSION['foto_usuario']; ?>" height="40px">
    </div>


    <img class="imagem" src="<?php echo $_SESSION['foto_usuario']; ?>" height="40px">
    <a href="edicao_perfil.php"><img class="user_edit" src="imagens/user_edit.png"></a>


    <div class="texto">
    <?php    
        echo $_SESSION['nome_usuario'];        
    ?>
    </div>
    

    <div class="caixa">
    </div>

    <input class="botao_hist" type="button" value="Histórico do Quiz">
    <a href="AgendamentosPrevios.php"><input class="botao_agend" type="button" value="Histórico de Agendamentos"></a>
    <?php
        
        if ($_SESSION['tipo_usuario']==1){
        echo '<input class="botao_users" type="button" value="Lista de Usuários">';
        }
    ?>


</body>
</html>
