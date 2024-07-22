<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include 'header.php' ?>

</head>
<body id="aluno">

<div class="container-fluid">
<?php include 'nav.php' ?>

    <div class="row">
        <?php include 'aside.php' ?>
        
        <main class="col-md-9">
            <div class="card col-md-7">
                <div class="card-body">
                <ul>
          <div class="d-grid gap-2">
                <div class="row"><button class="btn btn-outline-secondary" type="button"><a href="cadastroaluno.php">Cadastrar Aluno</a></button></div>
                <div class="row"><button class="btn btn-outline-secondary" type="button"><a href="atualizaraluno.php">Atualizar Aluno</a></button></div>
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