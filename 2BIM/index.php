<?php
// ============================================
// Projeto Escolar: CRUD Farmácia VAV
// Arquivo: index.php — Listagem de produtos
// ============================================

require_once __DIR__ . '/config/conexao.php';

// Mensagens de feedback via redirect
$feedback = '';
$tipoFeedback = '';

if (isset($_GET['msg'])) {
    $msgs = [
        'excluido'    => ['texto' => 'Produto excluído com sucesso.',   'tipo' => 'sucesso'],
        'editado'     => ['texto' => 'Produto atualizado com sucesso.', 'tipo' => 'sucesso'],
        'cadastrado'  => ['texto' => 'Produto cadastrado com sucesso.', 'tipo' => 'sucesso'],
        'erro_delete' => ['texto' => 'Não foi possível excluir o produto.', 'tipo' => 'erro'],
        'erro_id'     => ['texto' => 'Produto não encontrado.',         'tipo' => 'erro'],
    ];
    $chave = htmlspecialchars($_GET['msg'], ENT_QUOTES, 'UTF-8');
    if (isset($msgs[$chave])) {
        $feedback     = $msgs[$chave]['texto'];
        $tipoFeedback = $msgs[$chave]['tipo'];
    }
}

// Busca todos os produtos ordenados por nome
$produtos = [];
try {
    $pdo  = getConexao();
    $stmt = $pdo->query('SELECT id, nome, fabricante, preco, estoque FROM produtos ORDER BY nome ASC');
    $produtos = $stmt->fetchAll();
} catch (PDOException $e) {
    error_log('[Farmácia VAV] Erro ao listar: ' . $e->getMessage());
    $feedback     = 'Erro ao carregar os produtos. Tente novamente mais tarde.';
    $tipoFeedback = 'erro';
}

require_once __DIR__ . '/includes/header.php';
?>

<section class="pagina-listagem">

    <div class="listagem-topo">
        <h2>Estoque de Produtos</h2>
        <a href="cadastro.php" class="btn btn--primario">+ Novo Produto</a>
    </div>

    <?php if (!empty($feedback)) : ?>
        <div class="alerta alerta--<?= $tipoFeedback ?>">
            <?= $feedback ?>
        </div>
    <?php endif; ?>

    <?php if (empty($produtos)) : ?>
        <div class="estado-vazio">
            <p>Nenhum produto cadastrado ainda.</p>
            <a href="cadastro.php" class="btn btn--primario">Cadastrar primeiro produto</a>
        </div>
    <?php else : ?>

        <p class="contagem">
            <?= count($produtos) ?> produto<?= count($produtos) !== 1 ? 's' : '' ?> encontrado<?= count($produtos) !== 1 ? 's' : '' ?>.
        </p>

        <div class="produtos-grid">
            <?php foreach ($produtos as $produto) : ?>
                <article class="card-produto">
                    <div class="card-produto__info">
                        <h3 class="card-produto__nome">
                            <?= htmlspecialchars($produto['nome'], ENT_QUOTES, 'UTF-8') ?>
                        </h3>
                        <p class="card-produto__fabricante">
                            <?= htmlspecialchars($produto['fabricante'], ENT_QUOTES, 'UTF-8') ?>
                        </p>
                        <dl class="card-produto__detalhes">
                            <div class="card-produto__detalhe">
                                <dt>Preço</dt>
                                <dd>R$ <?= number_format((float) $produto['preco'], 2, ',', '.') ?></dd>
                            </div>
                            <div class="card-produto__detalhe">
                                <dt>Estoque</dt>
                                <dd>
                                    <?= (int) $produto['estoque'] ?> un.
                                    <?php if ((int) $produto['estoque'] === 0) : ?>
                                        <span class="badge badge--esgotado">Esgotado</span>
                                    <?php elseif ((int) $produto['estoque'] <= 10) : ?>
                                        <span class="badge badge--baixo">Estoque baixo</span>
                                    <?php endif; ?>
                                </dd>
                            </div>
                        </dl>
                    </div>
                    <div class="card-produto__acoes">
                        <a href="editar.php?id=<?= (int) $produto['id'] ?>" class="btn btn--secundario">Editar</a>
                        <a href="excluir.php?id=<?= (int) $produto['id'] ?>"
                           class="btn btn--perigo"
                           onclick="return confirm('Excluir &quot;<?= htmlspecialchars($produto['nome'], ENT_QUOTES, 'UTF-8') ?>&quot;?')">
                            Excluir
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

    <?php endif; ?>

</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
