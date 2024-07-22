<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include 'header.php' ?>

</head>
<body>

<div class="container-fluid">
<?php include 'nav.php' ?>

    <div class="row mb-3">
        <?php include 'aside.php' ?>
        
        <main class="col-md-9">
            <div class="card col-md-11">
                <div class="card-body">
                    <div class="text-center"><h2>Atualizar dados do aluno(a)</h2></div>
                        <form class="row g-3 mt-4" action="cadastro_aluno.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="matricula" class="form-label">Matrícula</label>
                                <input type="text" class="form-control" id="matricula" placeholder="Digite a matrícula">
                            </div>
                            <div class="col-md-6">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome do aluno">
                            </div>
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
                                <label class="form-label" for="genero">Genero</label>
                                <select class="form-select" name="genero" id="select" required>
                                    <option selected value="">Selecione seu gênero</option>
                                    <option value="ml">Masculino</option>
                                    <option value="fm">Feminino</option>
                                    <option value="nb">Não-Binário</option>
                                    <option value="ag">Agênero</option>
                                    <option value="bg">Bigênero</option>
                                    <option value="ts">Transexual</option>
                                    <option value="is">Intersexo</option>
                                    <option value="ot">Outro</option>
                                </select>
                          </div>
                      <div class="col-md-6">
                            <label class="form-label"for="telefone">Telefone</label> <br>
                            <input class="form-control"  type="text" name="telefone" id="telefone" required>
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
        <div class="row">
                <div class="col-md-6">
                    <label class="form-label"for="cep">CEP</label> <br>
                    <input class="form-control"  type="text" name="cep" id="cep" required>
                </div>
                <div class="col-md-6">
                <label class="form-label" for="bairro">Bairro</label> <br>
                <input class="form-control"  type="text" name="bairro" id="bairro" required>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                <label class="form-label" for="cidade">Cidade</label>
                <input class="form-control"  type="text" name="cidade" id="cidade" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="estado">Estado</label>
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
                </div>
                </div>
              <div class="col-12 mt-4">
              <button type="submit" class="btn btn-primary float-end me-4">Enviar</button>
              <button type= "reset" class="btn btn-danger float-end me-2">Limpar</button>
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