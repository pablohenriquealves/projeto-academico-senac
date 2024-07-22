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
        
        <main class="col-md-9">
            <div class="card col-md-7">
                <div class="card-body">
                <ul>
                    <div class="d-grid gap-2">
                <div class="row">
                    <a href="consultaProfessorCurso.php" class="btn btn-outline-secondary btn-lg">Consultar de curso</a>
                </div>
                <div class="row">
                    <a href="cadastrocurso.php" class="btn btn-outline-secondary btn-lg">Cadastro de curso</a>
                </div>
                <div class="row">
                    <a href="consultaalunocurso.php" class="btn btn-outline-secondary btn-lg">Consulta aluno em um curso</a>
                </div>

                <div class="row">
                    <a href="consultaCoordenadorCurso.php" class="btn btn-outline-secondary btn-lg">Consulta de coordenador de curso</a>
                </div>
                <div class="row">
                    <a href="cadastroMatricula.php" class="btn btn-outline-secondary btn-lg">Matricular aluno em um curso</a>
                </div>
                </div>

        </ul>

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