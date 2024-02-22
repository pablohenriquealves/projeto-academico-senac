<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="script/codigo.js"></script>
<body>

<form name="formsenha" action="" method="post" onsubmit="return testa_senha()">

<p>
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email">
</p>
    <p>
        <label for="">Senha</label>
        <input type="password" name="senha" id="senha">
    </p>
<p>
        <label for="">Confirme a senha</label>
        <input type="password" name="confirmasenha" id="confirmasenha">
</p>
    <input type="submit" value="Enviar">

</form>
    
</body>
</html>