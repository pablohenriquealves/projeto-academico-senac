<?php session_start(); ?>
<?php 

    if(isset($_POST['nome'],$_POST['salario'])){
        $nome = $_POST['nome'];
        $salario = $_POST['salario'];
        $funcionario  = array('nome' => $nome, 'salario'=> $salario);

       if(!isset($_SESSION['funcionarios'])){
        $_SESSION['funcionarios'] = array();
        array_push($_SESSION['funcionarios'], $funcionario);
       }else{
        array_push($_SESSION['funcionarios'], $funcionario);
       }

}else{
    echo "Preencha os dados de cadastro";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionários</title>
</head>
<body>
    
    <form action="inserirfuncionario.php" method ="POST">

    <p><label for="nome">Funcionário </label>
    <input type="text" name="nome" id="nome" required></p>

    <p><label for="salario">Salário </label>
    <input type="number" name="salario" id="salario" required></p>

    <input type="submit" value="Enviar">
    </form>

    <?php 
        if(isset($_SESSION['funcionarios'])){
        foreach ($_SESSION['funcionarios'] as $f) {
            echo $f['nome']." "; echo $f['salario']."<br>";
        }
    }



    
    ?>

</body>
</html>

