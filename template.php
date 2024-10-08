
<div class="card-funcionarios" >
    <header>
        <h2>Nome:<?= $funcionarios['nome']?></h2>
        <p>Cargo:<?= $funcionarios['cargo']?> </p>
        <p>Idade:<?= $funcionarios['idade']?> </p>
       
    </header>
    <footer>
        <a href="tel">telefone <?= $funcionarios['telefone']?></a>
        <span>ID: <?=$funcionarios['id']?></span>
    </footer>
</div>