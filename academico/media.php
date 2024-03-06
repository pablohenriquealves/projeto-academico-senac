<link rel="stylesheet" href="css/principal.css">

<?php 
$prova1 = $_POST['prova1'];
$prova2 = $_POST['prova2'];
$aluno = $_POST['aluno'];
$f = $_POST['faltas'];


function imprimirMedia($prova1, $prova2){
    return ($prova1 + $prova2)/2;
}

$resultado = imprimirMedia($prova1, $prova2);



if ($prova1 < 4.0 || $prova2 < 4.0) {
    echo "<p class='resultado'>Aluno $aluno está de recuperação<br> <b>AV1= $prova1 AV2= $prova2</b> <br></p>";
    echo "<p class='resultado'>Nota mínima em cada AV= 4.0</p>";
}
elseif ($resultado >= 7.0 && $resultado <= 10 && $f <=32) {
    echo "<p class='resultado'>Aluno $aluno aprovado com a nota: ".$resultado."</p>";
}
elseif ($resultado <=7.0 && $resultado >=3.0 && $f<=32) {
    echo "<p class='resultado'>Aluno $aluno está de recuperação com nota: ".$resultado."</p>";
}
elseif ($resultado==0) {
    echo "<p class='resultado'>Aluno $aluno reprovado por nota ".$resultado."</p>";
}
elseif ($f>32) {
    echo"<p class='resultado'>Aluno $aluno reprovado por ".$f." faltas</p>";
}
else{ 
    echo "<p class='resultado'>Preencha novamente o formulário</p>";
}

?>