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
                        <a href="consultaAlunoTurma.php" class="btn btn-outline-secondary btn-lg">Consultar aluno em turma</a>
                    <a href="cadastroturma.php" class="btn btn-outline-secondary btn-lg">Cadastrar turma</a>
                    <a href="atualizarturma.php" class="btn btn-outline-secondary btn-lg">Atualizar turma</a>
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