<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo_inicio.css">
    <title>Início</title>
</head>
<body>
    <div class="cabecalho">
        <img class="logo" src="imagens/logo.png" height="40px">
        <a href="Agendamentos.php"><img class="agenda_simb" src="imagens/agenda_simbol.png" height="40px"></a>
        <a href="quiz_com_conta.php"><img class="quiz_simb" src="imagens/quiz_simbol.png" height="40px"></a>
        <a href="Perfil.php"><img class="ima" src="<?php echo $_SESSION['foto_usuario']; ?>" height="40px"></a>
    </div>

    <div class="corpo">
        <form>

            <input type="radio" class="texto_titulo1" name="fancy" autofocus value="slide1" id="slide1"  />
            <input type="radio" name="fancy" value="slide2" id="slide2" />
            <label for="slide1">
                <p class="primeiro">
                    Descubra sua estética em
                </p>

                <p class="segundo">
                    grande estilo
                </p>

                <p class="terceiro">
                    Anule suas incertezas com o nosso quiz online
                </p>
                <a href="Quiz.html"><input class="botao1" type="button" value="Saiba Mais"></a>
            </label>
            <label for="slide2">
                <p class="quarto">
                    Fale Com Profissionais
                </p>

                <p class="quinto">
                    da área
                </p>

                <p class="sexto">
                    Agende agora sua reunião presencial ou remota
                </p>
                <a href="Agendamentos.php"><input class="botao1" type="button" value="Saiba Mais"></a>
            </label>

            <div class="keys">Use as setas do teclado para navegar</div>
        </form>
    </div>
</body>

</html>