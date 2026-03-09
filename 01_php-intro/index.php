<?php
$nome          = "Gustavo Henrique Maciel";
$profissao     = "Estudante de Tecnologia";
$curso         = "Técnico em Informática – IFPR";
$pagina_atual  = "inicio";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio – <?php echo $nome; ?></title>
    <link rel="stylesheet" href="includes/style.css">
  

</head>
<body>

<nav>
  
    <?php include 'includes/cabecalho.php'; ?>
</nav>

<div class="hero">
    <h1><?php echo $nome; ?></h1>
    <p><?php echo $profissao; ?> | <?php echo $curso; ?></p>
</div>

<div class="container">
    <h2>Bem-vindo ao meu portfólio</h2>
    <p>Esta página foi gerada pelo PHP em:
        <strong><?php echo date("02/03/26 \à\s 17:10:40"); ?></strong></p>
</div>

<footer>
    <?php include 'includes/rodape.php'; ?>
</footer>

</body>
</html>