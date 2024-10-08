<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="ex.css">
</head>
<body>
    <div class="box">
     
            <form action="" method="post">
                <fieldset>
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" class="inputUser"required><br><br>

                    <label for="cargo">Cargo:</label>
                    <input type="text" id="cargo" name="cargo" class="inputUser"required><br><br>
                    
                    
                    <label for="idade">Idade:</label>
                    <input type="number" id="idade" name="idade" class="inputUser"required><br><br>
                    
                    <label for="salario">Salário:</label>
                    <input type="number" id="salario" name="salario" class="inputUser"required><br><br>

                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" class="inputUser"required><br><br>

                    

                    <button type="submit">Cadastrar</button>
                </fieldset>
            </form>  
   </div> 
  
<?php


$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco_de_dados = 'banco';


$conexao = mysqli_connect($servidor, $usuario, $senha, $banco_de_dados);



// Verifica se os parâmetros foram passados
if (isset($_POST["nome"], $_POST["cargo"], $_POST["idade"], $_POST["salario"], $_POST["telefone"])) {
    $nome = $_POST["nome"];
    $cargo = $_POST["cargo"];
    $idade = $_POST["idade"];
    $salario = $_POST["salario"];
    $telefone = $_POST["telefone"];
    
    
    $inseri = $conexao ->query(query:"insert into funcionarios(nome, cargo, idade, salario, telefone) values('$nome','$cargo','$idade','$salario','$telefone')") ;
}     


function renderTemplate($funcionarios)
{
    include "template.php";
}

$selectFuncionarios = $conexao ->query('select * from funcionarios');

$rowFuncionarios = $selectFuncionarios -> fetch_all(MYSQLI_ASSOC);

    foreach($rowFuncionarios as $funcionarios){
    renderTemplate($funcionarios);
    };



$conexao->close();
 
?>


</body>
</html>