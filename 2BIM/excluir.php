<?php
// ============================================
// Projeto Escolar: CRUD Farmácia VAV
// Arquivo: excluir.php — Exclusão de produto
// Sem interface visual — apenas lógica e redirect
// ============================================

require_once __DIR__ . '/config/conexao.php';

// Valida o ID recebido via GET
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);

if ($id === false || $id === null) {
    header('Location: index.php?msg=erro_id');
    exit;
}

try {
    $pdo  = getConexao();
    $stmt = $pdo->prepare('DELETE FROM produtos WHERE id = :id');
    $stmt->execute([':id' => $id]);

    if ($stmt->rowCount() === 0) {
        header('Location: index.php?msg=erro_id');
        exit;
    }

    header('Location: index.php?msg=excluido');
    exit;

} catch (PDOException $e) {
    error_log('[Farmácia VAV] Erro ao excluir id=' . $id . ': ' . $e->getMessage());
    header('Location: index.php?msg=erro_delete');
    exit;
}
