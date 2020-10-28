<?php
namespace App\Controllers;

use App\Controllers\ControladorCore;
use App\Models\BD\ProdutoDao;

class Paginas extends ControladorCore {
    
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->produtos();
        $this->addTituloPagina("Página Inicial");
        $this->carregarPagina("v_home");    
    }

    public function produto() {
        $this->addTituloPagina("Página Produto");
        $this->carregarPagina("v_produto");
    }

    public function carrinho() {
        $this->addTituloPagina("Página Carrinho");
        $this->carregarPagina("v_carrinho");
    }

    public function produtos() {
            $usu = new ProdutoDao();
            $resu = $usu->carregarProdutos();
            $this->addDadosPagina(
                "produtos",$resu);
    }

    public function produtos_carrinho(){
        
    }

    public function sobre() {
        echo __FUNCTION__;
    }

    public function erro404() {
        $this->carregarPagina("erro404");
    }
}