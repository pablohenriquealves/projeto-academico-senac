<?php 

$nome = $_POST['nome'];
$duracao = $_POST['duracao'];
$coordenador = $_POST['coordenador'];
$nivel = $_POST['nivel'];
$modalidade = $_POST['modalidade'];

require('script/conexao.php');

$sql = "INSERT INTO curso (nome, duracao, coordenador, nivel, modalidade) VALUE ('$nome','$duracao','$coordenador','$nivel','$modalidade') ";

    if (mysqli_query($conexao, $sql)) {
        echo "Dados inseridos com sucesso";
    } else {
        echo "Erro ao inserir dados".mysqli_error($conexao);
    }
    mysqli_close($conexao);
header('Location:cadastrodecurso.php');

?>