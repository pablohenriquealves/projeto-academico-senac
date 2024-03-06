<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/principal.css">
    <title>Cadastro do Curso</title>
</head>
<body>
    <h2>Cadastro de Curso</h2>
    <p>Prezado aluno(a), preencha com seus dados:</p>

    <form action="cadastromatricula.php" method="post" class="formulario">

<div>
        <label for="Aluno">Nome: </label>
        <input type="text" name="aluno" id="aluno">
</div>
  <div>
        <label for="curso">Selecione o curso: </label>
        <input type="radio" name="curso" id="m" value="m">Manutenção de computadores 
        <input type="radio" name="curso" id="r" value="r">Redes de computadores
        <input type="radio" name="curso" id="p" value="p">Programação de computadores
        <input type="radio" name="curso" id="w" value="w">Programação Web
  </div>
<div>
        <input type="reset" value="Limpar">
        <input type="submit" value="Enviar">
    
</div>
    </form>

<table border="1">

<thead>
    <tr>
        <th>Nome</th>
        <th>Cursos</th>
        <th>Ações</th>
    </tr>
</thead>
<tbody>
    <?php 
    require ('script/conexao.php'); 
    $sql = "SELECT nome, curso FROM matricula";
    $resultado = mysqli_query($conexao, $sql);

    while($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>".$row['nome']."</td>";
        echo "<td>";
        switch ($row['curso']) {
            case 'm':
                echo "Manutenção de computadores";
                break;
            case 'r':
                echo "Redes de computadores";
                break;
            case 'p':
                echo "Programação de computadores";
                break;
            case 'w':
                echo "Programação Web";
                break;
            
            default:
                echo "Escolha uma opção de curso válida";
                break;
        }
        echo "</td>";
        echo "<td><button>Editar</button></td>";
        echo "</tr>";
    }
    mysqli_close($conexao);
    ?>


</tbody>


</table>

</body>
</html>