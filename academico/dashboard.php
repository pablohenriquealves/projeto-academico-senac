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
<?php include 'nav.php' ?>

<div class="row">
            <?php include 'aside.php' ?>

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