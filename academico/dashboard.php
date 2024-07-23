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
<body>

<div class="container-fluid">
<?php include 'nav.php' ?>

<div class="row">
  <?php include 'aside.php' ?>
  
  <main class="col-md-9 d-flex flex-column align-items-center">
    <div class="text-center mb-3 w-100"><h2><p>Bem-vindo ao <b>sistema de controle acadêmico</b>.</p></h2></div>
    <div class="card col-md-8">
            <div class="card-body">
              <div class="d-grid gap-2">
            <a href="notas.php" class="btn btn-outline-secondary btn-lg">Aqui você poderá consultar notas</a>
            <a href="notas.php" class="btn btn-outline-secondary btn-lg">E também a frequência dos alunos</a>
            </div>
                  </div>
                </div>
            </main>
        </div>
        </div>


    <footer>
        <?php include 'footer.php' ?>
    </footer>
</body>
</html>