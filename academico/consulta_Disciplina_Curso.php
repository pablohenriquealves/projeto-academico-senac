<?php
$disciplina = $_POST['disciplina'];
require('script/conexao.php');
$sql = "SELECT curso_disciplina.id_disciplina, curso_disciplina.id_curso, disciplina.id, disciplina.nome AS dnome FROM curso_disciplina INNER JOIN disciplina ON curso_disciplina.id_disciplina = disciplina.id WHERE curso_disciplina.id_curso = {$disciplina}";

$curso_disciplina = mysqli_query($conexao, $sql);
echo "Disciplinas do curso: <br/>";
while($dados = mysqli_fetch_Assoc($curso_disciplina))
{
echo "<br/> {$dados['dnome']} <br/>";
}
?>

<form action="consultaDisciplinaCurso.php" method="get">
    <input type="submit" value="Voltar">
</form>