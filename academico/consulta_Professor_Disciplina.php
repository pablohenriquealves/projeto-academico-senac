<?php
$disciplina = $_POST['disciplina'];
require('script/conexao.php');
$sql = "SELECT turma.iddisciplina AS iddisciplina, disciplina.id, disciplina.nome AS dnome, professor.nome AS pnome FROM turma INNER JOIN (disciplina, professor) ON (turma.iddisciplina = $disciplina AND professor.cpf = turma.idprofessor)";

$curso_disciplina = mysqli_query($conexao, $sql);
while($dados = mysqli_fetch_Assoc($curso_disciplina))
{
echo "A disciplina: {$dados['dnome']} tem como professor: {$dados['pnome']}";
}

?>

<form action="consultaProfessorDisciplina.php" method="get">
    <input type="submit" value="Voltar">
</form>