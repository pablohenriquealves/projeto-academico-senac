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

    switch ($curso) {
        case 'm':
            echo 'Manutenção de computadores: manhã e noite';
            
            break;
        case 'r':
            echo 'Rede de computadores: tarde';

            
            break;
        case 'p':
            echo '‘Programação de computadores: tarde e noite';

            
            break;
        case 'w':
            echo 'Programação web: noite';

            break;
        
        default:
            echo 'Escolha uma opção válida';

        break;
    }

$grupo = array("Alvaro", "Kelly", "Rodrigo", "Leticia");
$i = 0;

for ($i=0; $i < count($grupo); $i++) { 
    $aluno = $grupo[$i];
    echo '<br>'.$aluno;
}

$disciplinas = array("Redes de computadores", "Algorítmos", "Programação de computadores", "Manutenção de computadores");
foreach($disciplinas as $materias)
echo '<p>'.$materias.'</p>';


?>

</body>
</html>