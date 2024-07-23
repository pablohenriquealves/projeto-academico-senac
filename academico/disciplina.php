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
        
        <main class="col-md-9 d-flex justify-content-center align-items-center">
            <div class="card col-md-8">
                <div class="card-body">
                    <div class="d-grid gap-2">
                    <a href="cadastrocursodisciplina.php" class="btn btn-outline-secondary btn-lg">Cadastro de disciplina</a>
                    <a href="cadastrocursodisciplina.php" class="btn btn-outline-secondary btn-lg">Atualizar disciplina</a>
                    <a href="consultaDisciplinaCurso.php" class="btn btn-outline-secondary btn-lg">Consulta de disciplina por curso</a>
                    <a href="consultaProfessorDisciplina.php" class="btn btn-outline-secondary btn-lg">Consulta de professor por disciplina</a>
                </div>
                  </div>
                </div>
        </main>
        </div>
        </div>

    </form>

    <footer>
        <?php include 'footer.php' ?>
    </footer>
</body>
</html>