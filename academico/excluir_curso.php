<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];

require('script/conexao.php');

    $sql = "DELETE FROM matricula WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        header('Location:cadastrocurso.php');
        exit;
    }else{
        echo "Erro ao excluir curso.".mysqli_error($conexao);
    }

}else {
    header('Location:cadastrocurso.php');
    exit;
}




?>