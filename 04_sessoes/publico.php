<?php
/**
 * ==============================================================
 * ARQUIVO    : 04_sessoes/publico.php
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula       : 06 — Sessões e controle de acesso
 * Autor      : Gustavo Henrique Maciel
 * ==============================================================
 */

session_start();
require __DIR__ . '/includes/auth.php';

$nome = 'Gustavo Henrique Maciel';
$pagina_atual = '';
$titulo_pagina = 'Área Pública – ' . $nome;
$caminho_raiz = '../';

$usuario = usuario_logado();
$esta_logado = $usuario !== '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include __DIR__ . '/../includes/cabecalho.php'; ?>
</head>
<body>
    <div class="container">
        <h1>Área pública do portfólio</h1>
        <p>Esta página pode ser acessada sem autenticação e apresenta o caminho para a área restrita.</p>

        <?php if ($esta_logado): ?>
            <div class="alerta-sucesso">
                Você já está logado como <strong><?php echo htmlspecialchars($usuario); ?></strong>.
            </div>
            <p><a href="painel.php" class="btn">Ir ao Painel</a></p>
        <?php else: ?>
            <p>Visitante identificado. Para continuar, acesse a área restrita do sistema.</p>
            <p><a href="login.php" class="btn">Acessar Área Restrita</a></p>
        <?php endif; ?>
    </div>

    <?php include __DIR__ . '/../includes/rodape.php'; ?>
</body>
</html>
