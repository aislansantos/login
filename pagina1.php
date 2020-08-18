<?php
session_start();



if ($_SESSION['ativo'] != true) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<h1>Bem vindo <?= $_SESSION['user'] ?></h1>

<hr>

<br><br>

<a href="index.php?acao=sair">Sair</a>
<body>

</body>

</html>