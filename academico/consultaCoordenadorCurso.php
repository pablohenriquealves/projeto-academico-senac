<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta coordenador curso</title>
</head>
<body>

    <fieldset>
    <legend>Consulta de coordenador</legend>
    <form action="consulta_Coordenador_Curso.php" method="POST">

    <p>
        <label for="nome">Selecione o curso:</label> <br>
        <select name="curso" id="curso">
        <?php 
            require ('script/conexao.php');
            $sql = "SELECT curso.nome, curso.coordenador FROM curso";
            $resultado = mysqli_query($conexao, $sql);
            while($row = mysqli_fetch_Assoc($resultado))
            {
                echo "<option value= '{$row['coordenador']}'>{$row['nome']}</option>";
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