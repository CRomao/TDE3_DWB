<?php
namespace App\Models\BD;

use App\Models\Carrinho;
use PDO;
use Exception;

class CarrinhoDao extends Dao {

    public function __construct() {
        parent::__construct();
    }

    public function getItensCarrinho() {
        try {
            $sql = "SELECT foto, descricao, preco,  sum(quantidade) as 'quantidade' FROM tb_carrinho group by foto, descricao";

            $req = $this->pdo->prepare($sql);
            $req->execute();
            $linhas = [];
            while($linha = $req->fetch(PDO::FETCH_ASSOC)){
                array_push($linhas, 
                new Carrinho($linha["foto"], $linha["descricao"], $linha["preco"], $linha["quantidade"]));
            }

            return $linhas;

        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
        return null;
    }

    public function inserirItensCarrinho($foto, $descricao, $preco, $quantidade) {
        try {
            $sql = "INSERT INTO tb_carrinho(foto, descricao, preco, quantidade) values(?,?,?,?)";

            $req = $this->pdo->prepare($sql);
            $req->execute([$foto, $descricao, $preco, $quantidade]);

        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
        return null;
    }
}