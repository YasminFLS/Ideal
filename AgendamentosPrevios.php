<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css_AgendamentosPrévios.css">
    <title>Agendamentos Prévios</title>
</head>
<body>
    <div class="cabecalho">
    <a href="inicio_com_conta.php"><img class="logo" src="imagens/logo.png" height="40px"></a>
        <a href="Agendamentos.php"><img class="agendamento" src="imagens/Agendamento.png" height="40px"></a>
        <a href="quiz_com_conta.php"><img class="quiz" src="imagens/quiz.png" height="40px"></a>
        <a href="Perfil.php"><img class="ima" src="imagens/imagem.jpg" height="40px"></a>
    </div>
    <div class="texto1">
        <p>
            Agendamentos Prévios
        </p>
    </div>

    <br><br>
    <table class="tabela_agenda" border="1">
        <thead>
            <tr>
                <th>id_agendamentos</th>
                <th>data<th>
                <th>horário</th>
                <th>id_profissional</th>
                <th>id_usuario</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("listar_agendamento.php");

            if(!empty($lista_agendamentos)){

                foreach ($lista_agendamentos as $linha) {?>
                    <tr>
                        <td> <?php echo $linha['id_agendamentos'];?> </td>
                        <td> <?php echo $linha['data'];?> </td>
                        <td> <?php echo $linha['horario'];?> </td>
                        <td> <?php echo $linha['id_profissional'];?> </td>
                        <td> <?php echo $linha['id_usuario'];?> </td>
                        
                </tr>
            <?php }
            }
            ?>
        </tbody>
    </table>
</body>
</html>