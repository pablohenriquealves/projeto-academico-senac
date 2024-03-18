<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Professores</title>
</head>
<body>
    <p>Preencher os dados do professor(a):</p>
    <fieldset><legend>Cadastro do professor(a)</legend>
    <form action="cadastro_professor.php" method="POST">

    <p>
        <label for="nome">Nome</label> <br>
        <input type="text" name="nome" id="nome" required>
    </p>
    <p>
        <label for="cpf">CPF</label> <br>
        <input type="text" name="cpf" id="cpf" required>
    </p>
    <p>
        <label for="endereco">Endereço</label> <br>
        <input type="text" name="endereco" id="endereco" required>
    </p>
    <p>
        <label for="complemento">Complemento</label> <br>
        <input type="text" name="complemento" id="complemento" required>
    </p>
    <p>
        <label for="cep">CEP</label> <br>
        <input type="text" name="cep" id="cep" required>
    </p>
    <p>
        <label for="bairro">Bairro</label> <br>
        <input type="text" name="bairro" id="bairro" required>
    </p>
    <p>
        <label for="cidade">Cidade</label> <br>
        <input type="text" name="cidade" id="cidade" required>
    </p>
    <p>
        <label for="estado">Estado</label> <br>
        <select name="estado" id="select" required>
            <option value="">Escolha o Estado</option>
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
    <p>
        <label for="telefone">Telefone</label> <br>
        <input type="text" name="telefone" id="telefone" required>
    </p>
</fieldset>
<fieldset>
    
    <legend>Informações acadêmicas</legend>
    <label for="formacao">Formação</label>
    <input type="text" name="formacao" id="formacao" required>

    <label for="titulacao">Titulação</label>
    <select name="titulacao" id="select" required>
        <option value="">Selecione a titulação</option>
        <option value="graduacao">Graduação</option>
        <option value="mestrado">Mestrado</option>
        <option value="doutorado">Doutorado</option>
    </select>
    </fieldset>
    <p>
        <input type="reset" value="Limpar">
        <input type="submit" value="Enviar">
    </p>
</form>

</body>
</html>