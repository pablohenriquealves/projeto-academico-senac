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
    <label for="curso">Curso: </label>
    <input type="text" name="curso" id="curso">
    <input type="reset" value="Limpar">
    <input type="submit" value="Enviar">

    </form>

    <?php 


    $n1 = 10;
    $n2 = 15;
    $resultado = ++$n1;
    echo $resultado;

    
    ?>


</body>
</html>