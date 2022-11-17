<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css_agendamento.css">
    <title>Agendamentos</title>
</head>

<body>
    <div class="cabecalho">
        <a href="inicio_com_conta.php"><img class="logo" src="imagens/logo.png" height="40px"></a>
        <img class="agendamento" src="imagens/Agendamento.png" height="40px">
        <a href="quiz_com_conta.php"><img class="quiz" src="imagens/quiz.png" height="40px"></a>
        <a href="Perfil.php"><img class="ima" src="<?php echo $_SESSION['foto_usuario']; ?> height="40px"></a>
    </div>

    <p class="texto_servico">
        Que serviço está procurando?
    </p>

    <select id="servico">
        <option selected hidden style="display:none">Escolha um Serviço</option>
        <option value="1">Designer de Interiores</option>
        <option value="2">Eletricista</option>
        <option value="3">Encanador</option>
        <option value="4">Pintor</option>
    </select>


    <input type="submit" name="submit" class="botao1" value="Pesquisar" onclick="redirect()">

    <?php
        if ($_SESSION['tipo_usuario']==1){
    echo'<a href="Agendamentos_adm.php"><input class="botao_adm1" type="button" value="Administração"></a>';
        }
        ?>

    </select>
</body>
<script>
    function redirect() {
        var option = document.getElementById("servico").value;
        if (option == "1") {
            window.location.href = "http://localhost/ideal_sa/GitHub/Ideal/Designer_de_Interiores.html";
        } if (option == "2") {
            window.location.href = "http://localhost/ideal_sa/GitHub/Ideal/Eletricista.html";
        } if (option == "3") {
            window.location.href = "http://localhost/ideal_sa/GitHub/Ideal/Encanador.html";
        } if (option == "4") {
            window.location.href = "http://localhost/ideal_sa/GitHub/Ideal/pintor.html";
        }
    }
</script>



</html>