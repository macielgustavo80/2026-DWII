<?php
/**
 * ==============================================================
 * ARQUIVO    : 04_sessoes/perfil.php
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
$titulo_pagina = 'Perfil – ' . $nome;
$caminho_raiz = '../';

$usuario = usuario_logado();
$horario_login = $_SESSION['horario_login'] ?? date('d/m/Y H:i:s');
$visitas = $_SESSION['visitas'] ?? 0;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include __DIR__ . '/../includes/cabecalho.php'; ?>
</head>
<body>
    <div class="container">
        <h1>Perfil do usuário autenticado</h1>
        <p>Esta é a segunda página protegida da atividade.</p>

        <table class="tabela-detalhe">
            <tr>
                <td>Usuário</td>
                <td><?php echo htmlspecialchars($usuario); ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>Autenticado com sessão ativa</td>
            </tr>
            <tr>
                <td>Primeiro acesso na sessão</td>
                <td><?php echo htmlspecialchars($horario_login); ?></td>
            </tr>
            <tr>
                <td>Visitas registradas</td>
                <td><?php echo htmlspecialchars((string) $visitas); ?></td>
            </tr>
        </table>

        <p>
            <a href="painel.php" class="btn">Voltar ao painel</a>
            <a href="logout.php" class="btn btn-secundario">Sair</a>
        </p>
    </div>

    <?php include __DIR__ . '/../includes/rodape.php'; ?>
</body>
</html>
