<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Acadêmico - Justificativa de Falta</title>
    <link rel="stylesheet" href="css/principal.css">
</head>
<script src="script/codigo.js"></script>
<body>
    <h1>Frequência do Aluno</h1>

 <form name="formalunos" action="" method="post" class=formacademico onsubmit="return testa_form()">
        <label for="matricula">Matrícula</label>
        <input type="text" name="matricula" id="matricula">
        <label for="nome_aluno">Nome do Aluno</label>
        <input type="text" name="nome_aluno" id="nome_aluno">
        <label for="falta">Data da falta:</label>
        <input type="date" name="falta" id="falta">
        <button type="button" name="button" onClick="justifica_falta(this.form)">Justificar</button>
        <input type="submit" value="Enviar">
 </form>




</body>
</html>