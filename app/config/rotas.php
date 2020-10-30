<?php

$rotas[""] = array(
    "http" => "GET",
    "rota" => "/",
    "controller" => "App\\Controllers\\Paginas",
    "funcao" => "index"
);

$rotas["produto"] = array(
    "http" => "GET",
    "rota" => "/produto",
    "controller" => "App\\Controllers\\Paginas",
    "funcao" => "produto"
);

$rotas["carrinho"] = array(
    "http" => "GET",
    "rota" => "/carrinho",
    "controller" => "App\\Controllers\\Paginas",
    "funcao" => "carrinho"
);

$rotas["itemAdicionado"] = array(
    "http" => "GET",
    "rota" => "/itemAdicionado",
    "controller" => "App\\Controllers\\Paginas",
    "funcao" => "itemAdicionado"
);

$rotas["cadastrarProduto"] = array(
    "http" => "GET",
    "rota" => "/cadastrarProduto",
    "controller" => "App\\Controllers\\Paginas",
    "funcao" => "cadastrarProduto"
);

$rotas["cadastroRealizado"] = array(
    "http" => "GET",
    "rota" => "/cadastroRealizado",
    "controller" => "App\\Controllers\\Paginas",
    "funcao" => "cadastroRealizado"
);

$rotas["removerItem"] = array(
    "http" => "GET",
    "rota" => "/removerItem",
    "controller" => "App\\Controllers\\Paginas",
    "funcao" => "removerItem"
);

$rotas["erro404"] = array(
    "http" => "GET",
    "rota" => "/404",
    "controller" => "App\\Controllers\\Paginas",
    "funcao" => "erro404"
);

$rotas["login"] = array(
    "http" => "POST",
    "rota" => "/login",
    "controller" => "App\\Controllers\\Autenticacao",
    "funcao" => "entrar"
);

$rotas["logout"] = array(
    "http" => "POST",
    "rota" => "/logout",
    "controller" => "App\\Controllers\\Autenticacao",
    "funcao" => "sair"
);