<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    $aluno = $_POST['aluno'];
    $curso = $_POST['curso'];
    echo '<h2>'.'Confira os dados cadastrados: '.'</h2>';

    echo '<p>'.'Aluno: '.$aluno.'</p>';
    echo '<p>'.'Curso: '.$curso.'</p>';

    ?>

</body>
</html>