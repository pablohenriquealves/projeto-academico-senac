<?php
$idmatricula = $_POST['matricula'];
$idturma = $_POST['turma'];

require ('script/conexao.php');

$sqlcount = "SELECT COUNT(*) AS totalalunos FROM alunoturma WHERE idturma = '$idturma'";
$resultadocount = mysqli_query($conexao, $sqlcount);
$rowcount = mysqli_fetch_assoc($resultadocount);

$totalalunos = $rowcount['totalalunos'];

$limitealunos = 25;

if ($totalalunos >= $limitealunos){
    echo "A turma atingiu o limite de alunos";
}else {
    echo "Disponível";
}

$sql = "INSERT INTO alunoturma (idmatricula, idturma) VALUE ('$idmatricula','$idturma')";

if (mysqli_query($conexao, $sql)) {
    echo "Registro inserido com sucesso!";
}
else {
    echo "Erro ao inserir registro: ". mysqli_error($conexao);
}

header("location:cadastro_aluno_turma.php");
?>

