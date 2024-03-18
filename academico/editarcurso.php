<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    require('script/conexao.php');
    
    $sql = "SELECT * FROM matricula WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);
    
    if(mysqli_num_rows($resultado) == 1){
        $curso = mysqli_fetch_assoc($resultado);
        mysqli_close($conexao);
    }else {
        header("Location:cadastrocurso.php");
        exit;
    }
}else {
    header("Location:cadastrocurso.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Curso</title>
</head>
<body>
    <h1>Editar Curso</h1>
    <form action="atualizar_curso.php" method="post">

    <input type="hidden" name="id" id="id" value="<?php echo $curso['id']; ?>">
    <input type="text" name="nome" id="nome" value="<?php echo $curso['nome']; ?>">
    <input type="text" name="curso" id="curso" value="<?php echo $curso['curso']; ?>">
    
    
    
    
    <label for="curso"></label>
    <input type="radio" name="curso" id="curso_m" value="m" <?php echo $curso['curso'] == 'm' ? 'checked' : ""; ?> >
    <label for="m">Manutenção de Computadores</label>

    <input type="radio" name="curso" id="curso_r" value="r" <?php echo$curso['curso'] == 'r' ? 'checked' : ""?>>
    <label for="r">Redes de Computadores</label>

    <input type="radio" name="curso" id="curso_p" value="p" <?php echo $curso['curso'] == 'p' ? 'checked' : "" ?>>
    <label for="p">Programação de Computadores</label>

    <input type="radio" name="curso" id="curso_w" value="w" <?php echo $curso['curso'] == 'w' ? 'checked' : "" ?>>
    <label for="w">Programação Web</label>
    
    <input type="submit" value="Atualizar">
    <a href="cadastrocurso.php">Voltar</a>

    </form>
</body>
</html>
