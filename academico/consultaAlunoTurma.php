<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de aluno na turma</title>
</head>
<body>

    <fieldset>
    <legend>Consulta de aluno na turma</legend>
    <form action="consulta_Aluno_Turma.php" method="POST">

    <p>
        <label for="nome">Selecione a turma:</label> <br>
        <select name="turma" id="turma">
        <?php 
            require ('script/conexao.php');
            $sql = "SELECT turma.idturma AS idturma, turma.iddisciplina, turma.idprofessor, disciplina.id AS iddisciplina, disciplina.nome AS dnome, professor.cpf, professor.nome AS pnome FROM turma INNER JOIN (disciplina, professor) ON (turma.idprofessor = professor.cpf AND turma.iddisciplina = disciplina.id)";
            $resultado = mysqli_query($conexao, $sql);
            while($row = mysqli_fetch_Assoc($resultado))
            {
                echo "<option value= '{$row['iddisciplina']}'>{$row['dnome']} - Prof. {$row['pnome']}</option>";
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