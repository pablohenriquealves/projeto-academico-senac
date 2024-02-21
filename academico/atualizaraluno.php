<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar dados do aluno no sistema</title>
    <link rel="stylesheet" href="css/principal.css">
    <script src="script/codigo.js"></script>
</head>
<body>

<h1>Dados do Aluno</h1>
 <form action="" method="post" class="formacademico">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">
    <label for="">Sobrenome</label>
    <input type="text" name="sobrenome" id="sobrenome">
    <label for="">Nascimento</label>
    <input type="date" name="nasc" id="nasc">
    <label for="">CPF</label>
    <input type="number" name="cpf" id="cpf" maxlength="11">
    <label for="">Email</label>
    <input type="email" name="email" id="email">
    <button type="button" name="button" onClick="dados_aluno(this.form)">Atualizar dados</button>

 </form>
</body>
</html>