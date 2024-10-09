
<div class="card-funcionarios" >
    <header>
        <h2>Nome:<?= $funcionarios['nome']?></h2>
        <p>Cargo:<?= $funcionarios['cargo']?> </p>
        <p>Idade:<?= $funcionarios['idade']?> </p>
        <p>Salario: R$<?= $funcionarios['salario']?></p>
        <P>Telefone: <?= $funcionarios['telefone']?></P>
    </header>
    <footer>
        
        <a href="#"><span>ID: <?=$funcionarios['id']?></span></a>
    </footer>
</div>