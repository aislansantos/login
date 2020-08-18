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
</head>


<body>
    <h1>Login</h1>

    <form action="" method="post">
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
</body>

</html>