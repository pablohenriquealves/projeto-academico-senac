<?php
$turma = $_POST['turma'];
require('script/conexao.php');
$sql = "SELECT turma.idturma, turma.iddisciplina, matricula.idaluno, matricula.id, aluno.cpf, aluno.nome AS anome, aluno_turma.id_turma, aluno_turma.id_matricula FROM turma INNER JOIN (matricula, aluno, aluno_turma) ON (turma.iddisciplina = $turma AND turma.idturma = aluno_turma.id_turma AND aluno_turma.id_matricula = matricula.id AND matricula.idaluno = aluno.cpf)";

$aluno_turma = mysqli_query($conexao, $sql);
echo "Alunos(as): <br/>";
while($dados = mysqli_fetch_Assoc($aluno_turma))
{
echo "<br/> {$dados['anome']} <br/>";
}

?>

<form action="consultaAlunoTurma.php" method="get">
    <input type="submit" value="Voltar">
</form>