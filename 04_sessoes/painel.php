<<<<<<< HEAD
<?php
/**
 * ==============================================================
 * ARQUIVO    : 04_sessoes/painel.php
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula       : 06 — Sessões e controle de acesso
 * Autor      : Gustavo Henrique Maciel
 * ==============================================================
 */

session_start();
require __DIR__ . '/includes/auth.php';
requer_login();

$nome = 'Gustavo Henrique Maciel';
$pagina_atual = '';
$titulo_pagina = 'Painel – ' . $nome;
$caminho_raiz = '../';

if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 0;
}
$_SESSION['visitas']++;

$flash = $_SESSION['flash'] ?? '';
unset($_SESSION['flash']);

$usuario = usuario_logado();
$horario_login = $_SESSION['horario_login'] ?? date('d/m/Y H:i:s');
$visitas = $_SESSION['visitas'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include __DIR__ . '/../includes/cabecalho.php'; ?>
</head>
<body>
    <div class="container">
        <h1>Painel administrativo</h1>

        <?php if ($flash !== ''): ?>
            <div class="alerta-sucesso">
                <?php echo htmlspecialchars($flash); ?>
            </div>
        <?php endif; ?>

        <p>Olá, <strong><?php echo htmlspecialchars($usuario); ?></strong>. Você está autenticado na área restrita.</p>

        <table class="tabela-detalhe">
            <tr>
                <td>Usuário logado</td>
                <td><?php echo htmlspecialchars($usuario); ?></td>
            </tr>
            <tr>
                <td>Horário de acesso</td>
                <td><?php echo htmlspecialchars($horario_login); ?></td>
            </tr>
            <tr>
                <td>Visitas na sessão</td>
                <td><?php echo htmlspecialchars((string) $visitas); ?></td>
            </tr>
        </table>

        <p>Use este espaço para gerenciar o conteúdo do portfólio, revisar informações e acessar páginas protegidas.</p>

        <p>
            <a href="perfil.php" class="btn">Ver perfil</a>
            <a href="logout.php" class="btn btn-secundario">Sair</a>
        </p>
    </div>

    <?php include __DIR__ . '/../includes/rodape.php'; ?>
</body>
</html>
=======
<?php
require_once __DIR__ . '/includes/auth.php';

requer_login();

$_SESSION['visitas'] = ($_SESSION['visitas'] ?? 0) + 1;

$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php require_once __DIR__ . '/../includes/cabecalho.php'; ?>
</head>
<body>

<div class="container">

    <?php if ($flash): ?>
        <div class="alerta-sucesso">
            <?php echo htmlspecialchars($flash); ?>
        </div>
    <?php endif; ?>

    <div class="card">
        <h2>📊 Painel</h2>

        <p><strong>Usuário:</strong> <?php echo htmlspecialchars($_SESSION['usuario']); ?></p>
        <p><strong>Login em:</strong> <?php echo $_SESSION['logado_em']; ?></p>
        <p><strong>Visitas nesta sessão:</strong> <?php echo $_SESSION['visitas']; ?></p>

        <p>
            <a href="perfil.php">Ir para Perfil</a>
        </p>
    </div>

    <div class="card" style="margin-top: 16px;">
        <h3>📊 Painel de controle</h3>
        <p>Este conteúdo só é visível para usuários autenticados.</p>
        <p>Nas próximas aulas este painel terá funcionalidades reais (CRUD).</p>
    </div>

    <p style="margin-top: 24px; text-align: center;">
        <a href="logout.php"
           style="background: #cf1c21; color: white; padding: 10px 24px;
                  border-radius: 6px; text-decoration: none; font-weight: bold;">
            🚪 Sair
        </a>
    </p>

</div>

<?php require_once __DIR__ . '/../includes/rodape.php'; ?>
</body>
</html>
>>>>>>> e7cfe0f (entregando o atraso)
