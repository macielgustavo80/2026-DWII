<?php
/**
 * ==============================================================
 * ARQUIVO    : 01_php-intro/projetos.php
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Autor      : Gustavo Henrique Maciel
 * ==============================================================
 */

$nome          = 'Gustavo Henrique Maciel';
$pagina_atual  = 'projetos';
$titulo_pagina = 'Projetos – ' . $nome;
$caminho_raiz  = '../';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/cabecalho.php'; ?>
</head>
<body>
    <div class="container">
        <h1>📁 Meus Projetos</h1>

        <h2>Site Portfólio HTML/CSS</h2>
        <p>Primeiro site desenvolvido com HTML e CSS nas aulas de Desenvolvimento Web.</p>

        <h2>BlueSeek</h2>
        <p>Projeto de startup que estou começando a desenvolver.</p>

        <h2>Portfólio em PHP</h2>
        <p>Projeto da disciplina de Desenvolvimento Web II usando variáveis, includes e páginas reutilizáveis.</p>
    </div>

    <?php include '../includes/rodape.php'; ?>
</body>
</html>
