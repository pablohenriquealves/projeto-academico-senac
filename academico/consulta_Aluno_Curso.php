<?php
$curso = $_POST['curso'];
require('script/conexao.php');
$sql = "SELECT matricula.idcurso, matricula.idaluno, aluno.cpf, aluno.nome AS anome FROM matricula INNER JOIN aluno ON matricula.idcurso = $curso AND aluno.cpf = matricula.idaluno";

$aluno_curso = mysqli_query($conexao, $sql);
echo "Alunos(as): <br/>";
while($dados = mysqli_fetch_Assoc($aluno_curso))
{
echo "<br/> {$dados['anome']} <br/>";
}

?>

<form action="consultaAlunoCurso.php" method="get">
    <input type="submit" value="Voltar">
</form>