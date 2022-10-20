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
        <img class="logo" src="imagens/logo.png" width="70px" height="40px">
        <img class="agenda_simb" src="imagens/agenda_simbol.png" height="40px">
        <img class="quiz_simb" src="imagens/quiz_simbol.png" height="40px">

        <img class="ima" src="imagens/imagem.jpg" height="40px">
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
        <input class="p1_a" type="button" value="Cores quentes">
        <input class="p1_b" type="button" value="Cores frias">
        <input class="p1_c" type="button" value="Cores pastéis">
        <input class="p1_d" type="button" value="Cores vivas">
    </div>

    <img id="fotopergunta2" src="imagens/fotopergunta2.png">

    <!--Apenas um exemplo, mais perguntas serão elaboradas-->
    <p class="pergunta1_titulo">
        Pergunta 2
    </p>
    <p class="pergunta1">
        Qual o conteúdo que mais lhe agrada?
    </p>

    <div class="respostas2">
        <input class="p2_a" type="button" value="Filmes">
        <input class="p2_b" type="button" value="Natureza">
        <input class="p2_c" type="button" value="Leitura">
        <input class="p2_d" type="button" value="Jogos">
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
        <input class="p3_a" type="button" value="Asiática">
        <input class="p3_b" type="button" value="Européia">
        <input class="p3_c" type="button" value="Latino Americana">
        <input class="p3_d" type="button" value="Africana">
    </div>

    <img id="fotopergunta4" src="imagens/fotopergunta4.png">

    <!--Apenas um exemplo, mais perguntas serão elaboradas-->
    <p class="pergunta1_titulo">
        Pergunta 4
    </p>
    <p class="pergunta1">
        Você prefere um ambiente com luz...
    </p>

    <div class="respostas4">
        <input class="p4_a" type="button" value="Branca" onclick="somatorio_quiz()">
        <input class="p4_b" type="button" value="Tradicional">
        <input class="p4_c" type="button" value="Colorida">
        <input class="p4_d" type="button" value="Tudo escuro, sou gótico!">
    </div>

    <img id="fotopergunta5" src="imagens/fotopergunta5.png">

    <!--Apenas um exemplo, mais perguntas serão elaboradas-->
    <p class="pergunta1_titulo">
        Pergunta 5
    </p>
    <p class="pergunta1">
        Você se considera um colecionador ávido?
    </p>

    <div class="respostas5">
        <input class="p5_a" type="button" 
        value="Sim, não consigo mais
ver o chão da minha casa.">
        <input class="p5_b" type="button" value="Sim, coleciono muito.">
        <input class="p5_c" type="button" value="Coleciono apenas pequenos itens.">
        <input class="p5_d" type="button" value="Não, não coleciono nenhum
tipo de item,
quanto menos melhor.">
    </div>


</body>

</html>