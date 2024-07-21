<?php
$idmatricula = $_POST['aluno'];
$idturma = $_POST['turma'];

require ('script/conexao.php');

$sqlcount = "SELECT COUNT(*) AS totalalunos FROM aluno_turma WHERE id_turma = '$idturma'";
$resultadocount = mysqli_query($conexao, $sqlcount);
$rowcount = mysqli_fetch_assoc($resultadocount);

$totalalunos = $rowcount['totalalunos'];

$limitealunos = 25;

if ($totalalunos >= $limitealunos){
    echo "A turma atingiu o limite de alunos";
}else {
    echo "Disponível";
}

$sql = "INSERT INTO aluno_turma (id_matricula, id_turma) VALUE ('$idmatricula','$idturma')";

if (mysqli_query($conexao, $sql)) {
    echo "Registro inserido com sucesso!";
}
else {
    echo "Erro ao inserir registro: ". mysqli_error($conexao);
}

header("location:cadastroalunoturma.php");
?>

