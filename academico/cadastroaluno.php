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
            <div class="card col-md-12">
                <div class="card-body">
                    <div class="text-center"><h2>Cadastro de Aluno(a)</h2></div>
                        <form class="row g-3" action="cadastro_aluno.php" method="POST">
                        <div class="col-md-6">
                            <label for="matricula" class="form-label">Matrícula</label>
                            <input type="text" class="form-control" id="matricula" placeholder="Digite a matrícula">
                        </div>
                        <div class="col-md-6">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome do aluno">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-check-label" for="datanascimento">Data do Nascimento</label>
                                <input type="date" class="form-control" name="datanascimento" id="datanascimento">
                            </div>
                            <div class="col-md-6">
                                <label class="form-check-label" for="cpf">CPF</label>
                                <input type="char" class="form-control" name="cpf" id="cpf">
                            </div>
                        </div>
                        
                      <div class="row">
                          <div class="col-md-6">
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
                          </div>
                      <div class="col-md-6">
                            <p>
                            <label class="form-label"for="telefone">Telefone</label> <br>
                            <input class="form-control"  type="text" name="telefone" id="telefone" required>
                        </p>
                      </div>
    
                      </div>
           <div class="row">

                <div class="col-md-6">
                    <label class="form-label"for="endereco">Endereço</label>
                    <input class="form-control"  type="text" name="endereco" id="endereco" required>
                </div>
                <div class="col-md-6">
                <label class="form-label"for="complemento">Complemento</label>
                <input class="form-control"  type="text" name="complemento" id="complemento" required>
                </div>
           </div>
        <p>
            <label class="form-label"for="cep">CEP</label> <br>
            <input class="form-control"  type="text" name="cep" id="cep" required>
        </p>
        <p>
            <label class="form-label" for="bairro">Bairro</label> <br>
            <input class="form-control"  type="text" name="bairro" id="bairro" required>
        </p>
        <p>
            <label class="form-label" for="cidade">Cidade</label> <br>
            <input class="form-control"  type="text" name="cidade" id="cidade" required>
        </p>
        <p>
            <label class="form-label" for="estado">Estado</label> <br>
            <select class="form-select" name="estado" id="select" required>
                <option selectec value="">Escolha o Estado</option>
                <option value=”ac”>Acre</option>
                <option value=”al”>Alagoas</option>
                <option value=”ap”>Amapá</option>
                <option value=”am”>Amazonas</option>
                <option value=”ba”>Bahia</option>
                <option value=”ce”>Ceará</option>
                <option value=”df”>Distrito Federal</option>
                <option value=”es”>Espírito Santo</option>
                <option value=”go”>Goiás</option>
                <option value=”ma”>Maranhão</option>
                <option value=”ms”>Mato Grosso do Sul</option>
                <option value=”mt”>Mato Grosso</option>
                <option value=”mg”>Minas Gerais</option>
                <option value=”pa”>Pará</option>
                <option value=”pb”>Paraíba</option>
                <option value=”pr”>Paraná</option>
                <option value=”pe”>Pernambuco</option>
                <option value=”pi”>Piauí</option>
                <option value=”rj”>Rio de Janeiro</option>
                <option value=”rn”>Rio Grande do Norte</option>
                <option value=”rs”>Rio Grande do Sul</option>
                <option value=”ro”>Rondônia</option>
                <option value=”rr”>Roraima</option>
                <option value=”sc”>Santa Catarina</option>
                <option value=”sp”>São Paulo</option>
                <option value=”se”>Sergipe</option>
                <option value=”to”>Tocantins</option>
            </select>
        </p>






                        <div class="col-12 mt-1">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <button type= "reset" class="btn btn-danger">Limpar</button>
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