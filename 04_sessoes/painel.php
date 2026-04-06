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
