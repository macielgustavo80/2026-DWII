<?php
<<<<<<< HEAD
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
=======
$nome = "Gustavo Henrique Maciel";
$profissao = "Estudante de Tecnologia";
$curso = "TÃ©cnico em InformÃ¡tica - IFPR";
$pagina_atual = "projetos";

include '../includes/cabecalho.php';
include '../includes/nav.php';
?>

<section class="hero">
    
    <h1><?php echo $nome; ?></h1>
    <p><?php echo $profissao; ?> â€” <?php echo $curso; ?></p>
</section>

<main class="container">
    <h2>Meus Projetos</h2>

    <p>Ao longo do curso TÃ©cnico em InformÃ¡tica no IFPR, venho colocando em prÃ¡tica o que aprendo por meio do desenvolvimento de diferentes projetos, que refletem minha evoluÃ§Ã£o na Ã¡rea de programaÃ§Ã£o e web.

Um dos trabalhos foi a criaÃ§Ã£o de uma pÃ¡gina pessoal, construÃ­da com HTML e CSS, onde trabalhei a organizaÃ§Ã£o do conteÃºdo, uso de estrutura semÃ¢ntica e adaptaÃ§Ã£o para diferentes telas.

TambÃ©m desenvolvi um portfÃ³lio com PHP, utilizando includes e variÃ¡veis para integrar as pÃ¡ginas, o que permitiu uma melhor organizaÃ§Ã£o do cÃ³digo e reaproveitamento de componentes.

AlÃ©m desses projetos, realizei diversos exercÃ­cios e atividades prÃ¡ticas voltadas Ã  lÃ³gica de programaÃ§Ã£o e desenvolvimento web, fundamentais para fortalecer meu raciocÃ­nio e entender, de forma mais completa, o funcionamento das aplicaÃ§Ãµes.</p><br>
     <h2>Sistema de Pedido para Cantina</h2>

     <p>Sistema voltado para facilitar pedidos no intervalo escolar, com foco em organizaÃ§Ã£o, agilidade e melhor experiÃªncia para alunos e cantina.</p><br>

    <h2>Sistema de Controle de FrequÃªncia</h2>

    <p>AplicaÃ§Ã£o desenvolvida para registro e acompanhamento da presenÃ§a de alunos, com foco em organizaÃ§Ã£o e gestÃ£o de dados.</p><br>

    <h2>PortfÃ³lio Web</h2>

    <p>Desenvolvimento de um site pessoal para apresentar minha trajetÃ³ria, habilidades e projetos, utilizando HTML, CSS e estruturaÃ§Ã£o de pÃ¡ginas.</p><br>

    <h2>Projetos AcadÃªmicos em Desenvolvimento Web</h2>
    
    <p>CriaÃ§Ã£o de pÃ¡ginas e aplicaÃ§Ãµes simples utilizando HTML, CSS e PHP, com foco no aprendizado prÃ¡tico e na compreensÃ£o do funcionamento de sistemas.</p><br>

</main>

<?php include '../includes/rodape.php'; ?>
>>>>>>> e7cfe0f (entregando o atraso)
