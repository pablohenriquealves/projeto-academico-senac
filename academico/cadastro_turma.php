<?php
$iddisciplina = $_POST['disciplina'];
$idprofessor = $_POST['professor'];

require ('script/conexao.php');

$sql = "INSERT INTO turma (iddisciplina, idprofessor) VALUE ('$iddisciplina','$idprofessor')";

if (mysqli_query($conexao, $sql)) {
    echo "Registro inserido com sucesso!";
}
else {
    echo "Erro ao inserir registro: ". mysqli_error($conexao);
}

header("location:cadastroturma.php");
?>