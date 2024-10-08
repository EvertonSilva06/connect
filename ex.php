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
     
            <form action="" method="get">
                <fieldset>
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" class="inputUser"required><br><br>

                    <label for="salario">Salário:</label>
                    <input type="number" id="salario" class="inputUser"required><br><br>

                    <label for="idade">Idade:</label>
                    <input type="number" id="idade" class="inputUser"required><br><br>

                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" class="inputUser"required><br><br>

                    
                    <label for="cargo">Cargo:</label>
                    <select id="cargo">
                        <option value="gerente">Gerente</option>
                        <option value="desenvolvedor">Desenvolvedor</option>
                        <option value="analista">Analista</option>
                        <option value="estagiario">Estagiário</option>
                    </select><br><br>

                    <button type="submit">Cadastrar</button>
                </fieldset>
            </form>
      
    </div>
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