<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
} else {
  if(!isset($_SESSION['bemvindo']))
    echo '<script>alert("Bem-vindo ' . $_SESSION['usuario'] . '");</script>';
  $_SESSION['bemvindo'] = true;
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php include 'header.php' ?>
</head>

<body id="inicio">

<div class="container-fluid">
    <header class="d-flex flex-wrap justify-content-between align-items-center py-3 mb-4 border-bottom">
      <!-- Logo e título -->
      <a href="dashboard.php" class="d-flex mb-3 mb-md-0 text-decoration-none link-body-emphasis">
        <img src="imagens/logosenacv2.png" alt="logo senac" class="logo">
      </a>

      <div class="fs-4 ms-2 text-center"><h1>Controle Acadêmico</h1></div>

      <!-- Navegação e formulário de pesquisa -->
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <!-- <a class="navbar-brand" href="#">Navbar</a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex ms-2" role="search">
              <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
          </div>
        </div>
      </nav>
    </header>

<div class="row">
            <aside class="col-md-3">
  <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">Menu</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="dashboard.php" class="nav-link active" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
          Início
        </a>
      </li>
      <li>
      <a href="aluno.php" class="nav-link link-dark">
      <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
         Consultar Alunos
        </a>
      </li>
      <li>
        <a href="atualizaraluno.php" class="nav-link link-dark">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
        Atualizar Cadastro Aluno
        </a>
      </li>
      <li>
      <a href="editarcurso.php" class="nav-link link-dark">
      <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
      Atualizar Curso Aluno
        </a>
      </li>
      <li>
        <a href="professor.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
          Professores
        </a>
      </li>
      <li>
      <a href="disciplina.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
          Disciplinas
        </a>
      </li>
      <li>
        <a href="turma.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
          Turmas
        </a>
      </li>
      <li>
        <a href="nota.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
          Notas
        </a>
      </li>
      <li>
        <a href="frequencia.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
          Frequência
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong> <?php $_SESSION['usuario'] ?> </strong>
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
        <li><a class="dropdown-item" href="#">Perfil</a></li>
        <li><a class="dropdown-item" href="#">Configurações</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sair</a></li>
      </ul>
    </div>
  </div>
  </aside>

  <main class="col-md-9">
    <div><h2><p>Bem-vindo ao <b>sistema de controle acadêmico</b>.</p></h2></div>
                <div class="card col-md-7">
                <div class="card-body">
                  <p>Aqui você poderá consultar <a href="notas.php" alt="notas da turma" target="_self">notas</a>.</p>
                  <p>E também a <i><a href="frequencia.php" alt="frequencia dos alunos">frequência</a></i>   dos alunos.</p>
                  </div>
                </div>
            </main>
        </div>

<footer>
  <?php include 'footer.php'?>
</footer>

</body>
</html>