<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/principal.css">
    <title>Nota</title>
</head>
<body>
    <div class="form">        
    <form action="media.php" method="post">
    <label for="">Nome do aluno: </label>
    <input type="text" name="aluno" id="aluno"><br><br>
    <label for="prova1">Nota 1: </label> 
    <input type="float" name="prova1" id="prova1"><br><br>
    <label for="prova2">Nota 2: </label>
    <input type="float" name="prova2" id="prova2"><br><br>
    <label for="faltas">Quatidades de faltas: </label>
    <input type="int" name="faltas" id="faltas"><br><br>
    <input type="submit" value="Enviar">
    </form>
    </div>

</body>
</html>