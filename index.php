<?php 
require_once 'conexao.php';
$sql = "CREATE TABLE IF NOT EXISTS usuarios (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
email VARCHAR(150) UNIQUE NOT NULL,
telefone VARCHAR(20) NOT NULL,
ativo BOOLEAN DEFAULT 1,
data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP
)
";
//preparar o comando sql
//statement = stmt

$stmt = $pdo->prepare($sql);

//executar o comando

$stmt->execute();

//mensagem de sucesso
echo "tabela criada ou ja existe"
?>