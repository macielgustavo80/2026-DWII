<?php
<<<<<<< HEAD
/**
 * ==============================================================
 * ARQUIVO    : index.php
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula       : 05 — PHP + MariaDB: persistência de dados via PDO
 * Autor      : Gustavo Henrique Maciel
 * ==============================================================
 */

$nome = 'Gustavo Henrique Maciel';
$subtitulo = 'Repositório 2026 — Desenvolvimento Web II';

$aulas = [
    [
        'numero' => '00',
        'nome' => 'Apresentação Pessoal',
        'descricao' => 'Página estática com HTML e CSS.',
        'link' => '00_apresentacao/index.html',
    ],
    [
        'numero' => '03',
        'nome' => 'Portfólio Dinâmico com PHP',
        'descricao' => 'Mini-site de portfólio com variáveis, includes e menu dinâmico.',
        'link' => '01_php-intro/index.php',
    ],
    [
        'numero' => '04',
        'nome' => 'Formulário de Contato',
        'descricao' => 'Formulário com validação no servidor e padrão PRG.',
        'link' => '02_formularios/contato.php',
    ],
    [
        'numero' => '05',
        'nome' => 'Catálogo de Tecnologias',
        'descricao' => 'Catálogo dinâmico com PDO e MariaDB.',
        'link' => '03_pdo/index.php',
    ],
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($subtitulo); ?></title>
    <link rel="stylesheet" href="includes/style.css">
</head>
<body>
    <header>
        <h1><?php echo htmlspecialchars($nome); ?> 👨‍💻</h1>
        <p><?php echo htmlspecialchars($subtitulo); ?></p>
    </header>

    <div class="container">
        <h2>Projetos por Aula</h2>

        <?php foreach ($aulas as $aula): ?>
            <div class="card-aula">
                <h3>Aula <?php echo htmlspecialchars($aula['numero']); ?> — <?php echo htmlspecialchars($aula['nome']); ?></h3>
                <p><?php echo htmlspecialchars($aula['descricao']); ?></p>
                <p><a href="<?php echo htmlspecialchars($aula['link']); ?>" class="btn">Abrir</a></p>
            </div>
        <?php endforeach; ?>
    </div>

    <footer>
        <?php echo htmlspecialchars($nome); ?> &copy; <?php echo date('Y'); ?> | Desenvolvido com PHP | IFPR — Ponta Grossa
    </footer>
</body>
</html>
=======
/*
ARQUIVO: index.php (raiz do repositÃ³rio 2026-DWII)
Disciplina: Desenvolvimento Web II
Aula: Hub de navegaÃ§Ã£o do repositÃ³rio
Conceitos: array associativo, foreach, date(), htmlspecialchars()
*/

// VARIÃVEIS
$nome = "Gustavo Henrique Maciel";
$subtitulo = "RepositÃ³rio 2026 - Desenvolvimento Web II";

// CATÃLOGO DE AULAS
$aulas = [

[
"numero" => "00",
"nome" => "ApresentaÃ§Ã£o Pessoal",
"descricao" => "PÃ¡gina estÃ¡tica com HTML e CSS com foto de perfil e layout responsivo.",
"link" => "00_apresentacao/index.html",
"icone" => "ðŸ‘¤",
"cor" => "#667280",
"conceitos" => "HTML semÃ¢ntico, CSS Flexbox, responsividade"
],

[
"numero" => "03",
"nome" => "PortfÃ³lio DinÃ¢mico com PHP",
"descricao" => "Mini-site de portfÃ³lio com variÃ¡veis, includes e menu dinÃ¢mico.",
"link" => "01_php-intro/index.php",
"icone" => "ðŸ’»",
"cor" => "#3b579d",
"conceitos" => "VariÃ¡veis, echo, include, foreach, operador ternÃ¡rio"
],

[
"numero" => "04",
"nome" => "FormulÃ¡rio de Contato",
"descricao" => "FormulÃ¡rio com validaÃ§Ã£o no servidor, proteÃ§Ã£o XSS e padrÃ£o PRG.",
"link" => "02_formularios/contato.php",
"icone" => "ðŸ“©",
"cor" => "#3ba34a",
"conceitos" => "$_POST, validaÃ§Ã£o, htmlspecialchars(), header() + exit"
]

];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo htmlspecialchars($subtitulo); ?></title>

<link rel="stylesheet" href="includes/index.css">
</head>

<body>

<header>
<h1><?php echo htmlspecialchars($nome); ?></h1>
<p><?php echo htmlspecialchars($subtitulo); ?></p>
</header>

<div class="container">

<h2 class="secao">Projetos por Aula</h2>

<?php foreach ($aulas as $aula): ?>

<div class="card-aula" style="border-left-color: <?php echo $aula['cor']; ?>;">

<div class="icone">
<?php echo $aula['icone']; ?>
</div>

<div class="conteudo">

<span class="badge">
Aula <?php echo htmlspecialchars($aula['numero']); ?>
</span>

<h3 style="color: <?php echo $aula['cor']; ?>;">
<?php echo htmlspecialchars($aula['nome']); ?>
</h3>

<p>
<?php echo htmlspecialchars($aula['descricao']); ?>
</p>

<span class="conceitos">
ðŸ”‘ <?php echo htmlspecialchars($aula['conceitos']); ?>
</span>

<br>

<a href="<?php echo htmlspecialchars($aula['link']); ?>"
class="btn"
style="background: <?php echo $aula['cor']; ?>;">
Abrir â†’
</a>

</div>
</div>

<?php endforeach; ?>

<p style="text-align:right; font-size:13px; color:#9ca3af;">
Gerado em: <?php echo date("d/m/Y \Ã \s H:i:s"); ?>
</p>

</div>

<footer>
<?php echo htmlspecialchars($nome); ?>
&copy; <?php echo date("Y"); ?>
| Desenvolvido com PHP | IFPR â€“ Ponta Grossa
</footer>

</body>
</html>
>>>>>>> e7cfe0f (entregando o atraso)
