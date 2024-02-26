<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
    <link rel="stylesheet" href="css/principal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body id="inicio">
    <img src="imagens/logosenacv2.png" alt="logo senac" class="logo">
    <h1>
        <b>Controle Acadêmico</b>
    </h1>
    <p>Bem vindo ao <b>sistema de controle academico</b>.</p> <p>Aqui você poderá consultar suas <a href="notas.php" alt="notas da turma" target="_self">notas.</a></p><p>E também sua <i><a href="frequencia.php" alt="frequencia dos alunos" >frequencia</a></i>.</p> 

    <h2>Menu</h2>
<ul>
    <li><a href="aluno.php">Alunos</a></li>
    <li><a href="atualizaraluno.php">Atualizar Cadastro Aluno</a></li>
    <li><a href="professor.php">Professores</a></li>
    <li><a href="disciplina.php">Disciplinas</a></li>
    <li><a href="turma.php">Turmas</a></li>
    <li><a href="nota.php">Notas</a></li>
    <li><a href="frequencia.php">Frequencia</a></li>
</ul>


<?php 
$teste = "do aluno";
    echo '<p>'.'Sistema acadêmico '.$teste.'</p>';

$aluno = "Pablo";
$curso = "Programador Web";

echo '<p>'.'O aluno '.$aluno.' está matriculado no curso '.$curso.'</p>';

$notas = array("prova1" => 8.3, "prova2" => 5.9, "prova3" => 9.2);

echo '<p>'.'Média das notas do aluno '.$aluno.($notas["prova1"]+$notas["prova2"]+$notas["prova3"])/3,'</p>';


?>

</body>
</html>