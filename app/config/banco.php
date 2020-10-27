<?php
namespace App\Config;

use PDO;
use App\Models\BD\ConfigConexaoBD;

function getConexaoBD(): PDO {
    $conn = ConfigConexaoBD::getInstancia(
        "localhost",
        "tde3_dwb",
        "root",
        "sua-nova-senha"
    );
    
    return $conn->getConexao();
}