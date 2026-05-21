<?php
// ============================================
// Projeto Escolar: CRUD Farmácia VAV
// Arquivo: cadastro.php — Cadastro de produtos
// ============================================

require_once __DIR__ . '/config/conexao.php';

$mensagem = '';
$tipo     = '';
$campos   = ['nome' => '', 'fabricante' => '', 'preco' => '', 'estoque' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Sanitização
    $nome       = trim(htmlspecialchars($_POST['nome']       ?? '', ENT_QUOTES, 'UTF-8'));
    $fabricante = trim(htmlspecialchars($_POST['fabricante'] ?? '', ENT_QUOTES, 'UTF-8'));
    $preco      = filter_input(INPUT_POST, 'preco',   FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $estoque    = filter_input(INPUT_POST, 'estoque', FILTER_SANITIZE_NUMBER_INT);

    $campos = compact('nome', 'fabricante', 'preco', 'estoque');

    // Validação
    $erros = [];
    if (empty($nome) || mb_strlen($nome) < 2)
        $erros[] = 'O nome deve ter ao menos 2 caracteres.';
    if (empty($fabricante) || mb_strlen($fabricante) < 2)
        $erros[] = 'O fabricante deve ter ao menos 2 caracteres.';
    if ($preco === false || $preco === null || (float) $preco <= 0)
        $erros[] = 'O preço deve ser um número positivo (ex: 12.90).';
    if ($estoque === false || $estoque === null || (int) $estoque < 0)
        $erros[] = 'O estoque deve ser um inteiro maior ou igual a zero.';

    if (empty($erros)) {
        try {
            $pdo  = getConexao();
            $stmt = $pdo->prepare(
                'INSERT INTO produtos (nome, fabricante, preco, estoque)
                 VALUES (:nome, :fabricante, :preco, :estoque)'
            );
            $stmt->execute([
                ':nome'       => $nome,
                ':fabricante' => $fabricante,
                ':preco'      => number_format((float) $preco, 2, '.', ''),
                ':estoque'    => (int) $estoque,
            ]);
            header('Location: index.php?msg=cadastrado');
            exit;
        } catch (PDOException $e) {
            error_log('[Farmácia VAV] Erro ao cadastrar: ' . $e->getMessage());
            $mensagem = 'Erro interno ao salvar. Tente novamente.';
            $tipo     = 'erro';
        }
    } else {
        $mensagem = implode('<br>', $erros);
        $tipo     = 'erro';
    }
}

require_once __DIR__ . '/includes/header.php';
?>

<section class="pagina-cadastro">
    <h2>Novo Produto</h2>

    <?php if (!empty($mensagem)) : ?>
        <div class="alerta alerta--<?= $tipo ?>"><?= $mensagem ?></div>
    <?php endif; ?>

    <form action="cadastro.php" method="POST" novalidate>
        <div class="campo">
            <label for="nome">Nome do Produto</label>
            <input type="text" id="nome" name="nome"
                   value="<?= htmlspecialchars($campos['nome'], ENT_QUOTES, 'UTF-8') ?>"
                   maxlength="150" placeholder="Ex: Dipirona 500mg" required>
        </div>
        <div class="campo">
            <label for="fabricante">Fabricante</label>
            <input type="text" id="fabricante" name="fabricante"
                   value="<?= htmlspecialchars($campos['fabricante'], ENT_QUOTES, 'UTF-8') ?>"
                   maxlength="100" placeholder="Ex: EMS" required>
        </div>
        <div class="campo">
            <label for="preco">Preço (R$)</label>
            <input type="number" id="preco" name="preco"
                   value="<?= htmlspecialchars($campos['preco'], ENT_QUOTES, 'UTF-8') ?>"
                   min="0.01" step="0.01" placeholder="Ex: 12.90" required>
        </div>
        <div class="campo">
            <label for="estoque">Estoque (unidades)</label>
            <input type="number" id="estoque" name="estoque"
                   value="<?= htmlspecialchars($campos['estoque'], ENT_QUOTES, 'UTF-8') ?>"
                   min="0" step="1" placeholder="Ex: 100" required>
        </div>
        <div class="acoes">
            <button type="submit">Cadastrar Produto</button>
            <a href="index.php">Cancelar</a>
        </div>
    </form>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
