<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de professor disciplina</title>
</head>
<body>

    <fieldset>
    <legend>Consulta de professor disciplina</legend>
    <form action="consulta_Professor_Disciplina.php" method="POST">

    <p>
        <label for="nome">Selecione o curso:</label> <br>
        <select name="disciplina" id="disciplina">
        <?php 
            require ('script/conexao.php');
            $sql = "SELECT turma.iddisciplina AS iddisciplina, disciplina.id, disciplina.nome AS dnome FROM turma INNER JOIN disciplina ON turma.iddisciplina = disciplina.id";
            $resultado = mysqli_query($conexao, $sql);
            while($row = mysqli_fetch_Assoc($resultado))
            {
                echo "<option value= '{$row['iddisciplina']}'>{$row['dnome']}</option>";
            }
        ?>
       </select>

    </p>
    <p>
        <input type="reset" value="Limpar">
        <input type="submit" value="Enviar">
    </p>
</form>
</fieldset>


</body>
</html>