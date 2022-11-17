<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo_agenda_adm.css">
    <title>ADM Agendamentos</title>
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
            Cadastrar Profissional
        </p>
    </div>
    <form action="inserir_profissional.php" method="POST" class="insert_profissa">
        <p class="prof_text">
            Profissional:
        </p>
        <input type="text" class="prof_edit" name="profissional">
        <p class="hora_text">
            Telefone:
        </p>
        <input type="text" class="hora_edit" name="telefone">

        <input type="submit" class="show" value="Inserir">

        
    </form>
    <table class="tabela_agenda" border="1">
        <thead>
            <tr>
                <th>id_profissional</th>
                <th>nome_profissional<th>
                <th>telefone_profissional</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("listar_profissionais.php");

            if(!empty($lista_profissional)){

                foreach ($lista_profissional as $linha) {?>
                    <tr>
                        <td> <?php echo $linha['id_profissional'];?> </td>
                        <td> <?php echo $linha['nome_profissional'];?> </td>
                        <td> <?php echo $linha['telefone_profissional'];?> </td>
                        </td>
                        <td> <a href="editar_profissional_pag.php?codigo=<?php echo $linha['id_profissional']?>">
                                <input type="button" value="Editar">
                            </a>
                        </td>
                        <td> <a href="excluir_agendamentos_adm.php?codigo=<?php echo $linha['id_profissional']?>">
                                <input type="button" value="Excluir">
                            </a>
                        </td>
                    </tr>
                    
            <?php }
            }
            ?>
        </tbody>
    </table>
</body>

</html>