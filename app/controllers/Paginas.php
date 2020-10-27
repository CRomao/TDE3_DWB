<?php
namespace App\Controllers;

use App\Controllers\ControladorCore;
use App\Models\BD\UsuarioDao;

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
       // if (!$this->estaLogado()) {
            //header("Location:".BASE_URL);

       // } else {
            //$this->addTituloPagina("Listar Produtos");
            $usu = new UsuarioDao();
            $resu = $usu->login("JOSE", 123456);
            $this->addDadosPagina(
                "produtos",
                array($resu->getNome(), $resu->getEmail(), $resu->getSenha())
            );

            //$this->carregarPagina("produtos");
        //}
    }
    
    public function sobre() {
        echo __FUNCTION__;
    }

    public function erro404() {
        $this->carregarPagina("erro404");
    }
}
