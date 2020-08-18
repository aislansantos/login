<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <span class="navbar-brand"><img src="assets/image/logo.png" alt=""></span>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cadastro
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Soja</a>
                    <a class="dropdown-item" href="#">Cliente</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Relatório</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php?acao='sair'">Sair <span class="sr-only">(página atual)</span></a>
            </li>
    </div>

</nav>


<p>Bem vindo <b><i> <?= $_SESSION['user'] ?> </i></b> !</p>