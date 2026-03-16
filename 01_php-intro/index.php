<?php
/**
 * ==============================================================
 * ARQUIVO    : 01_php-intro/index.php
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula       : 03 — PHP Intro / Aula 04 compatibilizada
 * Autor      : Gustavo Henrique Maciel
 * ==============================================================
 */

$nome          = 'Gustavo Henrique Maciel';
$profissao     = 'Estudante de Tecnologia';
$curso         = 'Técnico em Informática — IFPR';
$pagina_atual  = 'inicio';
$titulo_pagina = 'Portfólio – ' . $nome;
$caminho_raiz  = '../';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/cabecalho.php'; ?>
</head>
<body>
    <div class="hero">
        <h1><?php echo htmlspecialchars($nome); ?></h1>
        <p><?php echo htmlspecialchars($profissao); ?> | <?php echo htmlspecialchars($curso); ?></p>
    </div>

    <div class="container">
        <h2>Bem-vindo ao meu portfólio</h2>
        <p>Este portfólio foi modularizado com PHP usando variáveis, includes e menu dinâmico.</p>
        <p>Gerado em: <strong><?php echo date('d/m/Y \à\s H:i:s'); ?></strong></p>
    </div>

    <?php include '../includes/rodape.php'; ?>
</body>
</html>
