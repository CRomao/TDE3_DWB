<?php

namespace App\Controllers;
use App\Controllers\Paginas;

if($_POST['adicionado']){
    $_SESSION['carrinho-quantidade'] += 1;
    $_POST['adicionado'] = false;    
}

$this->adicionarProdutosCarrinho($_POST['produtoFot'], $_POST['produtoDesc'],
                            $_POST['produtoPrec'],$_POST['produtoQuantidade']);

header("Location: ". BASE_URL.'/carrinho');                            