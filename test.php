<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionários</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        section {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h1>Cadastro de Novo Funcionário</h1>
    <form id="cadastroFuncionario">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" required><br><br>

        <label for="salario">Salário:</label>
        <input type="number" id="salario" required><br><br>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" required><br><br>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" required><br><br>

        <label for="cargo">Cargo:</label>
        <select id="cargo">
            <option value="gerente">Gerente</option>
            <option value="desenvolvedor">Desenvolvedor</option>
            <option value="analista">Analista</option>
            <option value="estagiario">Estagiário</option>
        </select><br><br>

        <button type="submit">Cadastrar</button>
    </form>

    <section id="listaFuncionarios">
        <h2>Lista de Funcionários</h2>
        <ul id="usuariosList">
        
        </ul>
    </section>

    
</body>
</html>
