<!--
  Disciplina : Desenvolvimento Web II (DWII)
  Aula       : 03 - PHP Intro
  Autor      : Gustavo Maciel
  Data       : 09/03/2026
-->

<?php

$nome = "Gustavo Maciel";
$pagina_atual = "projetos";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
<title>Projetos - <?php echo $nome; ?></title>
 <link rel="stylesheet" href="includes/style.css">
</head>

<body >

<?php include 'includes/cabecalho.php'; ?>

<div >

<h1>Meus Projetos</h1>

<h2>Site Portfólio HTML/CSS</h2>
<p>Primeiro site desenvolvido utilizando HTML e CSS nas aulas de
Desenvolvimento Web.</p>

<h2>BlueSeek</h2>
<p>Projeto de startUP que estou começando a desenvolver.</p>

<h2>Portfólio em PHP</h2>
<p>Projeto da disciplina de Desenvolvimento Web II utilizando PHP e
includes para reaproveitamento de código.</p>

</div>

<?php include 'includes/rodape.php'; ?>
</body>
</html>