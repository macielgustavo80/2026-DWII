<?php
<<<<<<< HEAD
/**
 * ════════════════════════════════════════════════════════════
 * ARQUIVO    : 03_pdo/index.php
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula       : 05 — PHP + MariaDB: persistência de dados via PDO
 * Autor      : Gustavo Henrique Maciel
 * ════════════════════════════════════════════════════════════
 */

// Variáveis usadas pelo cabeçalho global
$titulo_pagina = 'Catálogo de Tecnologias';
$pagina_atual  = 'catalogo';

// Incluir a conexão PDO
require_once 'includes/conexao.php';

// Capturar filtros da URL
$categoria = trim($_GET['categoria'] ?? '');
$busca = trim($_GET['busca'] ?? '');

// Buscar categorias únicas para o topo da página
$stmtCategorias = $pdo->query('SELECT DISTINCT categoria FROM tecnologias ORDER BY categoria ASC');
$categorias = $stmtCategorias->fetchAll();

// Montar SQL conforme filtros ativos
if ($categoria !== '' && $busca !== '') {
    $stmt = $pdo->prepare(
        'SELECT * FROM tecnologias
         WHERE categoria = :cat
           AND (nome LIKE :termo OR descricao LIKE :termo)
         ORDER BY nome ASC'
    );
    $stmt->execute([
        'cat' => $categoria,
        'termo' => '%' . $busca . '%',
    ]);
} elseif ($categoria !== '') {
    $stmt = $pdo->prepare('SELECT * FROM tecnologias WHERE categoria = :cat ORDER BY nome ASC');
    $stmt->execute(['cat' => $categoria]);
} elseif ($busca !== '') {
    $stmt = $pdo->prepare(
        'SELECT * FROM tecnologias
         WHERE nome LIKE :termo OR descricao LIKE :termo
         ORDER BY nome ASC'
    );
    $stmt->execute(['termo' => '%' . $busca . '%']);
} else {
    $stmt = $pdo->query('SELECT * FROM tecnologias ORDER BY nome ASC');
=======
$titulo_pagina = "Catálogo de Tecnologias";
$pagina_atual  = "catalogo";

require_once 'includes/conexao.php';

// categorias
$stmtCat = $pdo->query("SELECT DISTINCT categoria FROM tecnologias ORDER BY categoria ASC");
$categorias = $stmtCat->fetchAll();

// evita null no trim
$busca = trim(filter_input(INPUT_GET, 'busca', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
$categoria = filter_input(INPUT_GET, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS);

// query dinâmica
if (!empty($busca) || !empty($categoria)) {

    $sql = "SELECT * FROM tecnologias WHERE 1=1";
    $params = [];

    if (!empty($busca)) {
        $sql .= " AND (nome LIKE :nome OR descricao LIKE :descricao)";
        $termo = "%" . $busca . "%";
        $params['nome'] = $termo;
        $params['descricao'] = $termo;
    }

    if (!empty($categoria)) {
        $sql .= " AND categoria = :categoria";
        $params['categoria'] = $categoria;
    }

    $sql .= " ORDER BY nome ASC";

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);

} else {
    $stmt = $pdo->query("SELECT * FROM tecnologias ORDER BY nome ASC");
>>>>>>> e7cfe0f (entregando o atraso)
}

$tecnologias = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<<<<<<< HEAD
    <?php include 'includes/cab_pdo.php'; ?>
</head>
<body>
    <div class="container">
        <h1 class="titulo-secao">🗄️ Catálogo de Tecnologias</h1>

        <form class="filtros" action="index.php" method="get">
            <label for="categoria">Categoria</label>
            <select id="categoria" name="categoria">
                <option value="">Todas</option>
                <?php foreach ($categorias as $item): ?>
                    <option value="<?php echo htmlspecialchars($item['categoria']); ?>" <?php echo $categoria === $item['categoria'] ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($item['categoria']); ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <label for="busca">Busca</label>
            <input type="text" id="busca" name="busca" value="<?php echo htmlspecialchars($busca); ?>">

            <button type="submit" class="btn">Filtrar</button>
            <a href="index.php" class="btn btn-secundario">Limpar</a>
        </form>

        <p class="contador"><?php echo count($tecnologias); ?> item(s) encontrado(s)</p>

        <div class="categorias-topo">
            <?php foreach ($categorias as $item): ?>
                <a class="tag-categoria" href="?categoria=<?php echo urlencode($item['categoria']); ?>">
                    <?php echo htmlspecialchars($item['categoria']); ?>
                </a>
            <?php endforeach; ?>
        </div>

        <?php foreach ($tecnologias as $tec): ?>
            <div class="card">
                <div class="card-topo">
                    <h3><?php echo htmlspecialchars($tec['nome']); ?></h3>
                    <span class="tag-categoria"><?php echo htmlspecialchars($tec['categoria']); ?></span>
                </div>
                <p><?php echo htmlspecialchars($tec['descricao']); ?></p>
                <a class="link-detalhe" href="detalhe.php?id=<?php echo $tec['id']; ?><?php echo $categoria !== '' ? '&categoria=' . urlencode($categoria) : ''; ?><?php echo $busca !== '' ? '&busca=' . urlencode($busca) : ''; ?>">
                    Ver detalhes →
                </a>
            </div>
        <?php endforeach; ?>
    </div>

    <?php include 'includes/rod_pdo.php'; ?>
</body>
</html>
=======
  <?php include 'includes/cab_pdo.php'; ?>
</head>
<body>
  <div class="container">

    <h1 class="titulo-secao">🗄️ Catálogo de Tecnologias</h1>

    <p style="color: #6b7280; margin-bottom: 20px;">
      <?php echo count($tecnologias); ?> tecnologia(s) cadastrada(s)
    </p>

    <!-- FILTRO POR CATEGORIA -->
    <div style="margin-bottom: 20px;">
      <strong>Filtrar por categoria:</strong><br>

      <a href="index.php" style="margin-right: 10px;">Todas</a>

      <?php foreach ($categorias as $cat): ?>
        <a href="?categoria=<?php echo urlencode($cat['categoria']); ?>"
           style="margin-right: 10px;">
           <?php echo htmlspecialchars($cat['categoria']); ?>
        </a>
      <?php endforeach; ?>
    </div>

    <!-- BUSCA -->
    <form method="GET" style="margin-bottom: 20px;">
      <input type="text" name="busca" placeholder="Buscar tecnologia..."
        value="<?php echo htmlspecialchars($busca); ?>"
        style="padding: 8px; width: 250px;">
      <button type="submit" style="padding: 8px;">Buscar</button>
    </form>

    <!-- RESULTADO VAZIO -->
    <?php if (count($tecnologias) === 0): ?>
      <p>Nenhuma tecnologia encontrada.</p>
    <?php endif; ?>

    <!-- LISTA -->
    <?php foreach ($tecnologias as $tec): ?>
      <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: center;">
          <h3><?php echo htmlspecialchars($tec['nome']); ?></h3>
          <span style="background: #e8edf5; color: #3b579d; padding: 3px 10px;
                       border-radius: 20px; font-size: 13px;">
            <?php echo htmlspecialchars($tec['categoria']); ?>
          </span>
        </div>

        <p><?php echo htmlspecialchars($tec['descricao']); ?></p>

        <a href="detalhe.php?id=<?php echo htmlspecialchars($tec['id']); ?>"
           style="color: #3b579d; font-size: 14px; font-weight: bold;">
          Ver detalhes →
        </a>
      </div>
    <?php endforeach; ?>

  </div>

  <?php include 'includes/rod_pdo.php'; ?>
</body>
</html>
>>>>>>> e7cfe0f (entregando o atraso)
