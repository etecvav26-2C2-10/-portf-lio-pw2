<?php
// ============================================
// Projeto Escolar: CRUD Farmácia VAV
// Arquivo: config/conexao.example.php
//
define('DB_HOST',    'localhost');
define('DB_NAME',    'farmacia_vav');
define('DB_USER',    'seu_usuario');   // ex: root
define('DB_PASS',    'sua_senha');     // ex: 1234
define('DB_CHARSET', 'utf8mb4');

function getConexao(): PDO
{
    $dsn = sprintf(
        'mysql:host=%s;dbname=%s;charset=%s',
        DB_HOST, DB_NAME, DB_CHARSET
    );

    $opcoes = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    try {
        return new PDO($dsn, DB_USER, DB_PASS, $opcoes);
    } catch (PDOException $e) {
        error_log('[Farmácia VAV] Falha na conexão: ' . $e->getMessage());
        exit('Não foi possível conectar ao banco de dados. Verifique as configurações.');
    }
}
