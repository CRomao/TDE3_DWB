<?php
namespace App\Models;

class Carrinho {

    private string $foto;
    private string $descricao;
    private string $preco;
    private string $quantidade;

    public function __construct($foto, $descricao, $preco, $quantidade) {
        $this->foto = $foto;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
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

    public function getQuantidade()
    {
        return $this->quantidade;
    }
}