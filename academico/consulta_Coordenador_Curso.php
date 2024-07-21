<?php
$cpf = $_POST['curso'];
require('script/conexao.php');
$consulta = "SELECT curso.coordenador,
curso.nome AS cnome,
professor.cpf,
professor.nome AS pnome

FROM curso
INNER JOIN professor
ON( curso.coordenador=professor.cpf AND curso.coordenador = {$cpf})";

$coordenadores = mysqli_query($conexao, $consulta);
while($dados = mysqli_fetch_Assoc($coordenadores))
{
echo
" O coordenador do curso: " . $dados['cnome'].
" é o professor(a): " . $dados['pnome']." <br
/>";
}

?>

<form action="consultaCoordenadorCurso.php" method="get">
    <input type="submit" value="Voltar">
</form>