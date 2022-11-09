<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo_quiz.css">
    <script src="somatorio_quiz.js"></script>
    <title>Quiz</title>
</head>

<body>
    <div class="cabecalho">
        <a href="inicio_com_conta.html"><img class="logo" src="imagens/logo.png" height="40px"></a>
        <a href="Agendamentos.php"><img class="agendamento" src="imagens/Agendamento.png" height="40px"></a>
        <a href="quiz_com_conta.php"><img class="quiz" src="imagens/quiz.png" height="40px"></a>
        <a href="Perfil.php"><img class="ima" src="imagens/imagem.jpg" height="40px"></a>
    </div>

    <div class="inicio">
        <img class="sofa" src="imagens/imagem_quiz_inicio.png">

        <p class="quiz_logo">
            Quiz <img class="logo2" src="imagens/logo.png">
        </p>
        <br>
        <p class="subtexto">
            Descubra sua estética com o nosso teste
        </p>

        <a href="#fotopergunta1">

            <input class="botao_quiz" type="button" value="Começar Quiz">
        </a>
    </div>

    <img class="bola_cheia_preta" src="imagens/bolacheia_quiz.png">
    <img class="bola_vazia_preta" src="imagens/bolavazia_quiz.png">
    <?php
        session_start();
        if ($_SESSION['tipo_usuario']==1){
    echo'<a href="Resultado_quiz_adm.php"><input class="botao_adm1" type="button" value="Administração Quiz"></a>';
        }
        ?>
    <img id="fotopergunta1" src="imagens/fotopergunta1.png">
    <!--Apenas um exemplo, mais perguntas serão elaboradas-->
    <p class="pergunta1_titulo">
        Pergunta 1
    </p>
    <p class="pergunta1">
        Qual paleta de cor mais lhe agrada?
    </p>

    <div class="respostas1">
        <input class="p1_a" type="button" value="Cores quentes" onclick="somatorio_quiz(17)">
        <input class="p1_b" type="button" value="Cores frias" onclick="somatorio_quiz(73)">
        <input class="p1_c" type="button" value="Cores pastéis" onclick="somatorio_quiz(94)">
        <input class="p1_d" type="button" value="Cores vivas" onclick="somatorio_quiz(72)">
    </div>

    <img id="fotopergunta2" src="imagens/fotopergunta2.png">

    <!--Apenas um exemplo, mais perguntas serão elaboradas-->
    <p class="pergunta1_titulo">
        Pergunta 2
    </p>
    <p class="pergunta1">
        Qual desses locais é de seu gosto?
    </p>


    <div class="respostas2">
        <input class="p2_a" type="button" value="Urbano" onclick="somatorio_quiz(46)">
        <input class="p2_b" type="button" value="Rural" onclick="somatorio_quiz(90)">
        <input class="p2_c" type="button" value="Praiano" onclick="somatorio_quiz(36)">
        <input class="p2_d" type="button" value="Florestal" onclick="somatorio_quiz(23)">
    </div>


    <img id="fotopergunta3" src="imagens/fotopergunta3.png">

    <!--Apenas um exemplo, mais perguntas serão elaboradas-->
    <p class="pergunta1_titulo">
        Pergunta 3
    </p>
    <p class="pergunta1">
        Você se aproxima de quais culturas
    </p>

    <div class="respostas3">
        <input class="p3_a" type="button" value="Asiática" onclick="somatorio_quiz(28)">
        <input class="p3_b" type="button" value="Européia" onclick="somatorio_quiz(50)">
        <input class="p3_c" type="button" value="Latino Americana" onclick="somatorio_quiz(11)">
        <input class="p3_d" type="button" value="Africana" onclick="somatorio_quiz(64)">
    </div>
    
    <input class="finalizar_botao" type="button" value="Finalizar" onclick="abrir();">

</body>

</html>