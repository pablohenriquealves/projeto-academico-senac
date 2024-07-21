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
            <div class="text-center">    <h1>Cadastro dos Alunos</h1>    </div>
            <div class="card col-md-7">
                <div class="card-body">
                        <form class="row g-3" action="" method="post">
                        <div class="col-md-6">
                            <label for="matricula" class="form-label">Matrícula</label>
                            <input type="text" class="form-control" id="matricula" placeholder="Digite a matrícula">
                        </div>
                        <div class="col-md-6">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome do aluno">
                        </div>
                        <div class="col-md-6">
                        <label class="form-check-label" for="datanascimento">Data do Nascimento</label>
                        <input type="date" class="form-control" name="datanascimento" id="datanascimento">
                        </div>
                        <label for="genero">Gênero</label>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Masculino
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Feminino
                        </label>
                        </div>
                        <div class="col-md-3">
                        <label class="form-check-label" for="nota1">Primeira nota</label>
                        <input class="form-control" type="number" name="nota1" id="nota1" value="nota1" min="0" max="10">
                        </div>
                        <div class="col-md-3">
                        <label class="form-check-label" for="nota2">Segunda nota</label>
                        <input class="form-control" type="number" name="nota2" id="nota2" value="nota2" min="0" max="10">
                        <input type="button" class="btn btn-warning mt-1" value="Calcular Média" ONCLICK="resultado(this.form)">
                        </div>
                        <div class="col-12 mt-1">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                        </form>

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