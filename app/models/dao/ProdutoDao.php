<?php
namespace App\Models\BD;

use App\Models\Produto;
use PDO;
use Exception;

class ProdutoDao extends Dao {

    public function __construct() {
        parent::__construct();
    }

    public function carregarProdutos() {
        try {
            $sql = "SELECT * FROM tb_produto";

            $req = $this->pdo->prepare($sql);
            $req->execute();
            $linhas = [];
            while($linha = $req->fetch(PDO::FETCH_ASSOC)){
                array_push($linhas, 
                new Produto($linha["foto"], $linha["descricao"], $linha["preco"]));
            }

            return $linhas;

        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
        return null;
    }
}