<?php
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
