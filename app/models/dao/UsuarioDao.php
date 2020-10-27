<?php
namespace App\Models\BD;

use App\Models\Usuario;
use PDO;

class UsuarioDao extends Dao {

    public function __construct() {
        parent::__construct();
    }

    public function carregarProdutos() {
        try {
            $sql = "SELECT * FROM tb_usuario";

            $req = $this->pdo->prepare($sql);
            $req->execute();
            $linhas = [];
            while($linha = $req->fetch(PDO::FETCH_ASSOC)){
                array_push($linhas, 
                new Usuario($linha["nome"], $linha["senha"], $linha["email"]));
            }

            return $linhas;

        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
        return null;
    }
}