<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
} else {
    echo '<script>alert("Bem-vindo ' . $_SESSION['usuario'] . '");</script>';
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/principal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body id="inicio">

    <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Controle Acadêmico</span>
        <img src="imagens/logosenacv2.png" alt="logo senac" class="logo">

      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
      </ul>
    </header>


    <p>Bem vindo ao <b>sistema de controle academico</b>.</p> <p>Aqui você poderá consultar suas <a href="notas.php" alt="notas da turma" target="_self">notas.</a></p><p>E também sua <i><a href="frequencia.php" alt="frequencia dos alunos" >frequencia</a></i>.</p> 

    <h2>Menu</h2>
<ul>
    <li><a href="aluno.php">Alunos</a></li>
    <li><a href="atualizaraluno.php">Atualizar Cadastro Aluno</a></li>
    <li><a href="editarcurso.php">Atualizar Curso do Aluno</a></li>
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>