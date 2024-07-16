<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include 'header.php' ?>

</head>
<body id="aluno">

<div class="container-fluid">
    <div class="row">
        <?php include 'aside.php' ?>
        
        <main class="col-md-9">
            <div>    <h1>Cadastro dos Alunos</h1>    </div>
            <div class="card col-md-7">
                <div class="card-body">
                    <form action="" method="post">
                        <label for="matricula">Matrícula</label>
                        <input type="text" name="matricula" id="matricula" placeholder="Digite a matrícula">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" placeholder="Digite o nome do aluno">
                        <label for="datanascimento">Data do Nascimento</label>
                        <input type="date" name="datanascimento" id="datanascimento">
                        <label for="genero">Gênero</label>
                        <input type="radio" name="genero" id="genero" value="Masculino">Masculino
                        <input type="radio" name="genero" id="genero" value="Feminino">Feminino
                        <label for="nota1">Primeira nota</label>
                        <input type="number" name="nota1" id="nota1" value="nota1" min="0" max="10">
                        <label for="nota2">Segunda nota</label>
                        <input type="number" name="nota2" id="nota2" value="nota2" min="0" max="10">
                        <input type="button" value="Calcular Média" ONCLICK="resultado(this.form)">              
                        
                        
                        <form class="row g-3">
                        <div class="col-md-6">
                            <label for="matricula" class="form-label">Matrícula</label>
                            <input type="text" class="form-control" id="matricula" placeholder="Digite a matrícula">
                        </div>
                        <div class="col-md-6">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome do aluno">
                        </div>
                        <div class="col-md-6">
                        <label for="datanascimento">Data do Nascimento</label>
                        <input type="date" class="form-control" name="datanascimento" id="datanascimento">
                        </div>
                        <div class="col-md-6">
                        <div class="form-check">
                        <label for="genero">Gênero</label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Masculino
                        </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Feminino
                        </label>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <label for="nota1">Primeira nota</label>
                        <input type="number" name="nota1" id="nota1" value="nota1" min="0" max="10">
                        </div>
                        <div class="col-md-6">
                        <label for="nota2">Segunda nota</label>
                        <input type="number" name="nota2" id="nota2" value="nota2" min="0" max="10">
                        <input type="button" value="Calcular Média" ONCLICK="resultado(this.form)">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                        </form>

                  </div>
                </div>
            </main>
        </div>
        </div>

    </form>

    <footer><?php include 'footer.php' ?>
    </footer>
</body>
</html>