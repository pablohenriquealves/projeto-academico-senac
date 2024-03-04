<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Curso</title>
</head>
<body>
    <h2>Cadastro de Curso</h2>
    <p>Prezado aluno(a), preencha com seus dados:</p>

    <form action="salvarcurso.php" method="post">

    <label for="Aluno">Nome: </label>
    <input type="text" name="aluno" id="aluno">
    <label for="curso">Selecione o curso: </label>
    <input type="radio" name="curso" id="m" value="m">Manutenção de computadores 
    <input type="radio" name="curso" id="r" value="r">Redes de computadores
    <input type="radio" name="curso" id="p" value="p">Programação de computadores
    <input type="radio" name="curso" id="w" value="w">Programação Web
    <input type="reset" value="Limpar">
    <input type="submit" value="Enviar">

    </form>

</body>
</html>