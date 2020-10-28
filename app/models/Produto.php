<?php
namespace App\Models;

class Produto {

    private string $foto;
    private string $descricao;
    private string $preco;
    private int $id;

    public function __construct($foto, $descricao, $preco) {
        $this->foto = $foto;
        $this->descricao = $descricao;
        $this->preco = $preco;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getPreco()
    {
        return $this->preco;
    }
}