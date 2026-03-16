<?php
/*
  includes/conexao.php
  Arquivo de conexão PDO — incluir em qualquer página que use o banco
*/

// Configurações da conexão (dados do docker-compose.yml)
$host    = '127.0.0.1';
$db      = 'dwii_db';
$user    = 'dwii_user';
$pass    = 'dwii2026';
$charset = 'utf8mb4';

// DSN — Data Source Name
// sslmode=disabled: comunicação entre containers não usa SSL
$dsn = "mysql:host=$host;dbname=$db;charset=$charset;sslmode=disabled";

// Opções de configuração do PDO
$opcoes = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

// Criar a conexão PDO
try {
    $pdo = new PDO($dsn, $user, $pass, $opcoes);
} catch (PDOException $e) {
    die('Erro de conexão com o banco de dados. Verifique o servidor.');
}
