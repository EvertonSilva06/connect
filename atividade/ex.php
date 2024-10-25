<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="ex.css">
</head>
<body>
    <!-- <header id="meu">
        <h1>CADASTRA AE</h1>
    </header> -->
    <form id ="sec-cad"action="" method="post">   
        <div class="box">
                <fieldset>
                    <legend><b>Cadastro</b></legend>
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

                    

                    <button type="submit" id="btn-bt">Cadastrar</button>
                </fieldset>
            </div> 
    </form>  
  
  
   <section id="lista">
        <form method="post" id="filtro">
            <fieldset id="fieldset-list">
                <legend><b>CARGOS</b></legend>
                        <select name="list-cargo" id="list">
                            <option value="Desenvolvedor">Desenvolvedor</option>
                            <option value="CEO">CEO</option>
                            <option value="Analista">Analista</option>
                        </select>
                        <input type="submit" id="btn-input" value="Buscar">
            </fieldset>
        </form>
    </section>
<?php


$servidor = 'localhost';
$usuario = 'root';
$senha = 'suporte';
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

function Lista ($cargo) {
    global $conexao;
    $selectCargo = $conexao->query("select * from funcionarios where cargo = '$cargo';");       
    $rowsFuncionarios = $selectCargo->fetch_all(MYSQLI_ASSOC);

    foreach ($rowsFuncionarios as $funcionarios) {
        renderTemplate($funcionarios);
    }
}

if (isset($_POST['list-cargo'])) {
    $cargo = $_POST['list-cargo'];
    Lista($cargo);
}

$conexao->close();
 
?>


</body>
</html>