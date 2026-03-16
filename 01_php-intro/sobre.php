<?php
/**
 * ==============================================================
 * ARQUIVO    : 01_php-intro/sobre.php
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Autor      : Gustavo Henrique Maciel
 * ==============================================================
 */

$nome         = 'Gustavo Henrique Maciel';
$pagina_atual = 'sobre';
$titulo_pagina = 'Sobre – ' . $nome;
$caminho_raiz = '../';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/cabecalho.php'; ?>
</head>
<body>
    <div class="container">
        <h1>👤 Sobre mim</h1>

        <p>Olá! Sou <strong><?php echo htmlspecialchars($nome); ?></strong>, estudante do Técnico em Informática no IFPR de Ponta Grossa.</p>
        <p>Gosto bastante de programação, especialmente desenvolvimento web, e estou construindo meu portfólio para evoluir na área.</p>
        <p><a href="index.php">← Voltar ao início</a></p>
    </div>

    <?php include '../includes/rodape.php'; ?>
</body>
</html>
