<?php
class Usuarios
{
    private $nome;
    private $email;
    private $pdo;


    public function __construct($pdo)
    {
     $this->pdo = $pdo;   
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function fazerLogin($n, $e)
    {
        $sql = "SELECT * FROM usuarios WHERE user ='$n' and email = '$e' ";
        $sql = $this->pdo->query($sql);

        if ($sql->rowCount() > 0){
            $_SESSION['ativo'] = true;
            $_SESSION['user'] = $n;
        }
    }

}
