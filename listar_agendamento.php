<?php
    include("conexao.php");

    $comando = $pdo->prepare("SELECT id_agendamentos, data_agenda, horario, id_profissional, id_usuario FROM agendamentos;");

    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $lista_agendamentos = $comando->fetchAll();
        
    }

    unset($comando);
    unset($pdo);
?>

<?php
    include("conexao.php");

    $comando = $pdo->prepare("SELECT id_resultado, nome_resultado, sequencia, id_quiz, FROM resultado;");

    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $lista_resultados = $comando->fetchAll();
        
    }

    unset($comando);
    unset($pdo);
?>