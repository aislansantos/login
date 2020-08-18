<?php
session_start();

/** faz requisição do arquivo de configuração de conexão com o banco */
require 'config.php';
require 'assets/class/usuarios.class.php';



if (!empty($_POST['nome']) && isset($_POST['email'])) {
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email');

    $usuario = new Usuarios($pdo);

    $usuario->fazerLogin($nome, $email);

    header("Location: pagina1.php");

    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>


<body>
    <div class="form-container">
        <div class="card" id="form-box">
            <form action="" method="post" id="login">
            <h1 class="text-center">Login</h1>
                <label for="">
                    Nome:
                    <input type="text" name="nome" id="">
                </label><br><br>
                <label for="">
                    E-mail:
                    <input type="email" name="email" id="">
                </label><br><br>
                <input type="submit" value="Entrar">
            </form>
        </div>
    </div>
</body>

</html>