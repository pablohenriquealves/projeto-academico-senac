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
    <div class="card col-md-12">
            <div class="card-body">
              <!-- <div class="d-grid gap-2">
            <a href="notas.php" class="btn btn-outline-secondary btn-lg">Aqui você poderá consultar notas</a>
            <a href="notas.php" class="btn btn-outline-secondary btn-lg">E também a frequência dos alunos</a>
            </div> -->
            <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary-emphasis"></strong>
          <h3 class="mb-0">Aqui você poderá consultar notas</h3>
          <div class="mb-1 text-body-secondary"></div>
          <p class="card-text mb-auto"></p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
            Consultar
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="fa-solid fa-pen-to-square" width="50" height="50" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success-emphasis"></strong>
          <h3 class="mb-0">E também a frequência dos alunos</h3>
          <div class="mb-1 text-body-secondary"></div>
          <p class="mb-auto"></p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
            Frequência
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="100" height="100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
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