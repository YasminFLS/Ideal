<!DOCTYPE html>
<?php
$somatorio=$_GET["somatorio"];
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo_resultado.css">
    <title>Resultado</title>
</head>

<body>
    <div class="cabecalho">
        <a href="inicio_com_conta.php"><img class="logo" src="imagens/logo.png" height="40px"></a>
        <a href="Agendamentos.php"><img class="agendamento" src="imagens/Agendamento.png" height="40px"></a>
        <a href="quiz_com_conta.php"><img class="quiz" src="imagens/quiz.png" height="40px"></a>
        <a href="Perfil.php"><img class="ima" src="imagens/imagem.jpg" height="40px"></a>
    </div>
    <br>
    <p class="seu_estilo">
        Seu estilo é
    </p>
    <p class="result">
    <?php
    if($somatorio==91)
    {
        echo "Chinoiserie";
    }


    ?>

    </p>

    <?php
    if($somatorio==91)
    {
        echo '<img class="chinoiserie_foto" src="imagens/chinoiserie.png">';
    }
    
    ?>

    <p class="paleta_text">
        Paletas de Cores
    </p>

    <?php
    if($somatorio==91)
    {
        echo '<p class="paleta_text2">
        As cores mais usadas em designs desse estilo são cores vibrantes que remetem a cultura chinesa.
        Em sua maioria são usadas uma mistura de cores quentes e leves jogadas de tons de azul.
    </p>';
    }
    
    ?>

    <br>

    <?php
    if($somatorio==91)
    {
        echo '<div class="paletas_chinoiserie">
        <div class="cores1">
            <div class="cor1"></div>
            <div class="cor2"></div>
            <div class="cor3"></div>
        </div>

        <div class="cores2">
            <div class="cor4"></div>
            <div class="cor5"></div>
            <div class="cor6"></div>
        </div>
    </div>';
    }
    
    ?>
    


    
</body>

</html>