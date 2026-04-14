<?php
<<<<<<< HEAD
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
=======
$nome = "Gustavo Henrique Maciel";
$profissao = "Estudante de Tecnologia";
$curso = "TÃ©cnico em InformÃ¡tica - IFPR";
$pagina_atual = "sobre";

include '../includes/cabecalho.php';
include '../includes/nav.php';
?>

<section class="hero">
    <h1><?php echo $nome; ?></h1>
    <p><?php echo $profissao; ?> â€” <?php echo $curso; ?></p>
</section>

<main class="container">
    <h2>Sobre mim</h2>

    <p>Sou Gustavo Henrique Maciel, estudante do curso TÃ©cnico em InformÃ¡tica no IFPR. Minha jornada na tecnologia comeÃ§ou dentro da escola, mas foi alÃ©m da sala de aula que comecei a me interessar de verdade pelo que dÃ¡ pra criar com programaÃ§Ã£o.</p>

<p>Hoje, venho construindo minha base em desenvolvimento web, trabalhando com HTML, CSS, PHP e lÃ³gica de programaÃ§Ã£o. Mais do que aprender cÃ³digos, busco entender como as coisas funcionam por trÃ¡s e como transformar ideias em algo que realmente funcione na prÃ¡tica.</p>

<p>O que mais me motiva Ã© justamente essa possibilidade de criar, testar e evoluir. Quero continuar me desenvolvendo na Ã¡rea, aprendendo novas tecnologias e explorando diferentes formas de construir soluÃ§Ãµes digitais.</p>

<p>Fora da parte tÃ©cnica, tambÃ©m gosto de tirar ideias do papel, desenvolver projetos prÃ³prios e estar sempre aprendendo algo novo que me ajude a crescer, tanto pessoal quanto profissionalmente.</p>
    
</main>

<?php include '../includes/rodape.php'; ?>
>>>>>>> e7cfe0f (entregando o atraso)
