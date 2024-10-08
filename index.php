<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php
//     function renderTemplate($funcionario){
//         include "template.php";
//     }

//     //setando as informações do banco
//      $servidor = 'localhost';
//      $usuario = 'root';
//      $senha = '';
//      $banco_de_dados = 'banco';
 
//      //criando um objeto dessa conexão
      $conexao = mysqli_connect($servidor,$usuario,$senha,$banco_de_dados);
 
    
    
        $selectFuncionarios = $conexao ->query('select * from funcionarios');
 
      $rowFuncionarios = $selectFuncionarios -> fetch_all(MYSQLI_ASSOC);
    
     foreach($rowFuncionarios as $funcionario){
        renderTemplate($funcionario);
      };
     
//      $conexao->close();
 
//  ?>
<section>

// </section>
// <form action="">
//      <select name="Cargos" id="cargo">
//         <option value="analista">analista</option>
//         <option value="dev">dev</option>
//      </select>
// </form>

// <?php -->
//     if(isset($_GET["cargo"])){
//         $cargo = $_GET["cargo"];
//         $conexao = mysqli_connect($servidor,$usuario,$senha,$banco_de_dados);

//         $selectFuncionarios = $conexao ->query('select * from funcionarios where cargo =' $cargo);
//         $rowFuncionariosCargo = $selectFuncionarios -> fetch_all(MYSQLI_ASSOC);
//     }
?>
</body>
</html>