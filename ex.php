<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="" method="get">
        <label for="">Nome:</label>
        <input type="text" id="" name="nome" require>
        
        <label for="">Salario:</label>
        <input type="salario" id="salario" name="salario" require>
        
        <label for="">Telefone:</label>
        <input type="number" id="" name="telefone" require>
        
        <label for="">Idade:</label>
        <input type="number" id="" name="idade" require>
        
        <label for="">Cargo:</label>
        <input type="text" id="" name="cargo" require>
        
        <input type="submit" value="Enviar">
    </form>
<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco_de_dados = 'banco';
    
    $conexao = mysqli_connect($servidor,$usuario,$senha,$banco_de_dados);
    
    $nome = $_GET['nome'];
?>

</body>
</html>