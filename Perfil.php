<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo_perfil.css">
    <title>Perfil</title>
</head>

<body>


    <div class="cabecalho">
        <img class="logo" src="logo.png" height="40px">
        <img class="agendamento" src="Agendamento.png" height="40px">
        <img class="quiz" src="quiz.png" height="40px">
        <img class="ima" src="imagem.jpg" height="40px">
    </div>


    <img class="imagem" src="imagem.jpg" height="40px">
    <a href="edicao_perfil.html"><img class="user_edit" src="user_edit.png"></a>


    <div class="texto">
        </P>
        Nome de úsuario
        </P>
    </div>

    <div class="caixa">
    </div>

    <input class="botao_hist" type="button" value="Histórico do Quiz">
    <input class="botao_agend" type="button" value="Histórico de Agendamentos">
    <?php
        session_start();
        if ($_SESSION['tipo_usuario']==1){
        echo '<input class="botao_users" type="button" value="Lista de Usuários">';
        }
