<?php
namespace App\Models;

class Usuario {

    private string $nome;
    private string $senha;
    private string $email;
    private int $id;

    public function __construct($nome, $senha, $email) {
        $this->nome = $nome;
        $this->senha = $senha;
        $this->email = $email;
    }

    

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Get the value of senha
     */ 
    public function getSenha()
    {
        return $this->senha;
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
}