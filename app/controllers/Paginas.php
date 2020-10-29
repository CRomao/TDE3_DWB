<?php
namespace App\Controllers;

use App\Controllers\ControladorCore;
use App\Models\BD\CarrinhoDao;
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
        $this->produtos_carrinho();
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
        $itens = new CarrinhoDao();
        $resu = $itens->getItensCarrinho();
        $this->addDadosPagina("produtos_carrinho", $resu);
    }

    public function adicionarProdutosCarrinho($foto, $descricao, $preco, $quantidade){
        $item = new CarrinhoDao();
        $resu = $item->inserirItensCarrinho($foto, $descricao, $preco, $quantidade);
        $this->addDadosPagina("adicionarProdutosCarrinho", $resu);
    }

    public function itemAdicionado(){
        if($_POST['adicionado']){
            $_SESSION['carrinho-quantidade'] += 1;
            $_POST['adicionado'] = false;    
        }
        $this->adicionarProdutosCarrinho($_POST['produtoFot'], $_POST['produtoDesc'],
                                    $_POST['produtoPrec'],$_POST['produtoQuantidade']);
        header("Location: ".BASE_URL.'/carrinho');  
        
    }

    public function cadastrarProduto(){
        $this->addTituloPagina("Página Cadastro Produto");
        $this->carregarPagina("v_cadastro_produto");
    }

    public function cadastroRealizado(){
        $item = new ProdutoDao();
        $resu = $item->inserirProduto($_POST['foto'], $_POST['descricao'],
        $_POST['preco']);
        $this->addDadosPagina("cadastroRealizado", $resu);
        $this->addTituloPagina("Produto Cadastrado");
        $this->carregarPagina("v_produto_cadastrado");
    }

    public function sobre() {
        echo __FUNCTION__;
    }

    public function erro404() {
        $this->carregarPagina("erro404");
    }
}