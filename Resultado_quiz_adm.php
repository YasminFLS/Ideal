<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css_ResultadoQuiz.css">
    <title>Resultado do Quiz (ADM)</title>
</head>
<body>
    <div class="cabecalho">
        <img class="logo" src="imagens/logo.png"  height="40px">
        <img class="agendamento" src="imagens/Agendamento.png" height="40px">
        <img class="quiz" src="imagens/quiz.png" height="40px">
        <img class="ima" src="imagens/imagem.jpg"  height="40px">
    </div>

    <div class="texto1">
        <p>
            Resultado do Quiz
        </p>
    </div>
    <table class="tabela_result" border="1">
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
            include("funcao/listar_agendamento.php");

            if(!empty($lista_resultados)){

                foreach ($lista_resultados as $linha) {?>
                    <tr>
                        <td> <?php echo $linha['id_resultado'];?> </td>
                        <td> <?php echo $linha['nome_resultado'];?> </td>
                        <td> <?php echo $linha['sequencia'];?> </td>
                        <td> <?php echo $linha['id_quiz'];?> </td>
                        
                </tr>
            <?php }
            }
            ?>
        </tbody>
    </table>
</body>
</html>