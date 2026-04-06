<?php
require_once __DIR__ . '/../04_sessoes/includes/auth.php';
requer_login();
require_once __DIR__ . '/includes/conexao.php';

$pdo = conectar();
$dados = $pdo->query("SELECT * FROM projetos ORDER BY id DESC")->fetchAll();
?>

<a href="cadastrar.php">Cadastrar</a>

<?php foreach ($dados as $p): ?>
    <div>
        <h2><?= htmlspecialchars($p['nome']) ?></h2>
        <p><?= htmlspecialchars($p['descricao']) ?></p>
    </div>
<?php endforeach; ?>
