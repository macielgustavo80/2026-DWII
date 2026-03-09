<!-- 01_php-intro/sobre.php -->
<?php

$nome         = "Gustavo Henrique Maciel";
$pagina_atual = "sobre";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/style.css">
    <title>Sobre - <?php echo $nome; ?></title>
</head>

<body>

<?php include 'includes/cabecalho.php'; ?>

<div>
    <h1>👤 Sobre mim</h1>

    <p>Olá! Sou <strong><?php echo $nome; ?></strong>, estudante de
    Técnico em Informática no IFPR de Ponta Grossa.</p>

    <p>Eu gosto muito de programação especialmente front-end, meus interesses profissionais são de me formar no curso, fazer uma faculdade relacionada e me formar na área.</p>

    <a href="index.php"
       >← Voltar ao início</a>
</div>

<?php include 'includes/rodape.php'; ?>

</body>
</html>