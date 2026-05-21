<?php
// ============================================
// Projeto Escolar: CRUD Farmácia VAV
// Arquivo: config/conexao.php
// ============================================

define('DB_HOST',    'localhost');
define('DB_NAME',    'farmacia_vav');
define('DB_USER', 'root');
define('DB_PASS', ''); // Deixe totalmente vazio dentro das aspas simples
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
