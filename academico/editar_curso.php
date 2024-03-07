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
    <form action="" method="post">

    <input type="text" name="id" id="id" value="<?php echo $curso['id']; ?>">
    <input type="text" name="id" id="id" value="<?php echo $curso['nome']; ?>">
    <input type="text" name="id" id="id" value="<?php echo $curso['curso']; ?>">

    <input type="submit" value="Atualizar">
    


    </form>
</body>
</html>

<?php 
$sql = "UPDATE matricula SET "
?> 
