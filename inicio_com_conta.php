<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo_inicio.css">
    <title>Início</title>
</head>

<body>
    <div class="cabecalho">
        <img class="logo" src="logo.png" height="40px">
        <?php
        session_start();
        if ($_SESSION['tipo_usuario']==1){
            echo '<a href="Agendamentos.html"><img class="agenda_simb" src="agenda_simbol.png" height="40px"></a>
            <a href="quiz_com_conta.php"><img class="quiz_simb" src="quiz_simbol.png" height="40px"></a>';
        }
        if ($_SESSION['tipo_usuario']==0){
            echo '<a href="Agendamentos.html"><img class="agenda_simb" src="agenda_simbol.png" height="40px"></a>
            <a href="quiz_com_conta.php"><img class="quiz_simb" src="quiz_simbol.png" height="40px"></a>';
        }
        
        ?>
       <a href="Perfil.php"><img class="ima" src="imagem.jpg"  height="40px"></a>
    </div>

    <div class="texto_titulo1">
        <p class="primeiro">
            Descubra sua estética em
        </p>

        <p class="segundo">
            grande estilo
        </p>

        <p class="terceiro">
            Anule suas incertezas com o nosso quiz online
        </p>

        <input class="botao1" type="button" value="Saiba Mais">

        <img class="seta_esquerda" src="seta_esquerda.png">
        <img class="seta_direita" src="seta_direita.png">
        <img class="bola_cheia" src="bola_cheia.png">
        <img class="bola_vazia" src="bola_vazia.png">
    </div>
</body>

</html>