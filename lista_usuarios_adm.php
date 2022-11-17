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
        <a href="inicio_com_conta.html"><img class="logo" src="imagens/logo.png" height="40px"></a>
        <a href="Agendamentos.html"><img class="agendamento" src="imagens/Agendamento.png" height="40px"></a>
        <a href="quiz_com_conta.php"><img class="quiz" src="imagens/quiz.png" height="40px"></a>
        <a href="Perfil.php"><img class="ima" src="imagens/imagem.jpg" height="40px"></a>
    </div>
    <div class="texto1">
        <p>
            Lista de Usuários
        </p>
    </div>
    <form action="inserir_usuario.php" method="POST" class="insert_profissa">
        <p class="prof_text">
            User:
        </p>
        <input type="text" class="prof_edit" name="profissional">

        <input type="submit" class="show" value="Inserir">

        
    </form>
    <table class="tabela_agenda" border="1">
        <thead>
            <tr>
                <th>id_usuario</th>
                <th>nome_usuario<th>
                <th>foto_usuario<th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("listar_usuarios.php");

            if(!empty($lista_user)){

                foreach ($lista_user as $linha) {?>
                    <tr>
                        <td> <?php echo $linha['id_usuario'];?> </td>
                        <td> <?php echo $linha['nome_usuario'];?> </td>
                        </td>
                        <td> <a href="editar_user_pag.php?codigo=<?php echo $linha['id_usuario']?>">
                                <input type="button" value="Editar">
                            </a>
                        </td>
                        <td> <a href="excluir_usuarios_adm.php?codigo=<?php echo $linha['id_usuario']?>">
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