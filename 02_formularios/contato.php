<?php
/**
<<<<<<< HEAD
 * ════════════════════════════════════════════════════════════
 * ARQUIVO    : 02_formularios/contato.php
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula       : 04 — PHP para Web: formulários, métodos GET e POST
 * Autor      : Gustavo Henrique Maciel
 * Conceitos  : $_POST, validação, array de erros, PRG, XSS
 * ════════════════════════════════════════════════════════════
 */

// 1. Inicializar variáveis de dados
$nome_visitante = '';
$email = '';
$assunto = '';
$mensagem = '';
$erros = [];
$assuntos_validos = ['Dúvida', 'Proposta de trabalho', 'Colaboração', 'Outro'];

// 2. Processar POST + validar + redirecionar
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
=======
 * -------------------------------------------------------------
 * ARQUIVO : 02_formularios/contato.php
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula : 04 â€“ PHP para Web: FormulÃ¡rios, GET e POST
 * Autor : Gustavo Henrique Maciel
 * Conceitos : $_SERVER, REQUEST_METHOD, trim(), empty(), strlen()
 * -------------------------------------------------------------
 */

// â€” VARIÃVEIS DO TEMPLATE
$nome = "Gustavo";
$pagina_atual = "contato";
$caminho_raiz = "../";
$titulo_pagina = "Contato";


// â€” ESTADO INICIAL
$nome_visitante = '';
$assunto = '';
$email = '';
$mensagem = '';
$erros = [];


// â€” PROCESSAR SOMENTE SE VEIO POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

>>>>>>> e7cfe0f (entregando o atraso)
    $nome_visitante = trim($_POST['nome_visitante'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $assunto = trim($_POST['assunto'] ?? '');
    $mensagem = trim($_POST['mensagem'] ?? '');

<<<<<<< HEAD
    if ($nome_visitante === '') {
        $erros[] = 'O campo Nome é obrigatório.';
    }

    if ($email === '') {
        $erros[] = 'O campo E-mail é obrigatório.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = 'Informe um e-mail válido.';
    }

    if ($assunto === '') {
        $erros[] = 'Selecione um assunto.';
    } elseif (!in_array($assunto, $assuntos_validos, true)) {
        $erros[] = 'O assunto selecionado é inválido.';
    }

    if ($mensagem === '') {
        $erros[] = 'O campo Mensagem é obrigatório.';
    } elseif (strlen($mensagem) < 10) {
        $erros[] = 'A mensagem deve ter pelo menos 10 caracteres.';
    } elseif (strlen($mensagem) > 500) {
        $erros[] = 'A mensagem deve ter no máximo 500 caracteres.';
    }

    if (empty($erros)) {
        $query = http_build_query([
            'nome' => $nome_visitante,
            'assunto' => $assunto,
        ]);

        header('Location: obrigado.php?' . $query);
=======
    // VALIDAÃ‡ÃƒO
    if (empty($nome_visitante)){
        $erros[] = 'O campo Nome Ã© obrigatÃ³rio.';
    }
    if (empty($email)) {
        $erros[] = 'O campo E-mail Ã© obrigatÃ³rio.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = 'Informe um e-mail vÃ¡lido.';
    }

    if (empty($assunto)) {
        $erros[] = 'Selecione um assunto.';
    }

    if (empty($mensagem)){
        $erros[] = 'O campo Mensagem Ã© obrigatÃ³rio.';
    } elseif (strlen($mensagem) < 10){
        $erros[] = "A mensagem deve ter pelo menos 10 caracteres.";
    } elseif (strlen($mensagem) > 500){
        $erros[] = "A mensagem deve ter no mÃ¡ximo 500 caracteres.";
    }

    // REDIRECIONAMENTO (PRG)
    if (empty($erros)) {
        header('Location: obrigado.php?nome=' . urlencode($nome_visitante));
>>>>>>> e7cfe0f (entregando o atraso)
        exit;
    }
}

<<<<<<< HEAD
// 3. Agora sim: variáveis do template
$nome = 'Gustavo Henrique Maciel';
$pagina_atual = 'contato';
$caminho_raiz = '../';
$titulo_pagina = 'Contato – ' . $nome;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/cabecalho.php'; ?>
</head>
<body>
    <div class="container">
        <h1>📬 Formulário de Contato</h1>
        <p>Use o formulário abaixo para entrar em contato pelo portfólio.</p>

        <?php if (!empty($erros)): ?>
            <div class="alerta-erro">
                <ul class="lista-erros">
                    <?php foreach ($erros as $erro): ?>
                        <li><?php echo htmlspecialchars($erro); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form class="formulario" action="contato.php" method="post">
            <label for="nome_visitante">Nome</label>
            <input type="text" id="nome_visitante" name="nome_visitante" value="<?php echo htmlspecialchars($nome_visitante); ?>">

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">

            <label for="assunto">Assunto</label>
            <select id="assunto" name="assunto">
                <option value="">Selecione um assunto</option>
                <?php foreach ($assuntos_validos as $opcao): ?>
                    <option value="<?php echo htmlspecialchars($opcao); ?>" <?php echo $assunto === $opcao ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($opcao); ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem" rows="8"><?php echo htmlspecialchars($mensagem); ?></textarea>

            <p class="contador"><?php echo strlen($mensagem); ?> de 500 caracteres usados</p>

            <button type="submit" class="btn">Enviar mensagem</button>
        </form>
    </div>

    <?php include '../includes/rodape.php'; ?>
</body>
</html>
=======
?>

<?php include '../includes/cabecalho.php'; ?>

<div class="container">

<h1 class="titulo-secao">ðŸ“¬ Entre em Contato</h1>

<form class="form-container" action="contato.php" method="post">

<label>Nome *</label>
<input type="text" name="nome_visitante" value="<?= htmlspecialchars($nome_visitante) ?>">

<label>E-mail *</label>
<input type="email" name="email" value="<?= htmlspecialchars($email) ?>">

<label>Assunto:</label>
    <select name="assunto">
    <option value="">Selecione um assunto</option>
    <option value="Duvida"
    <?php if ($assunto === 'Duvida') echo 'selected'; ?>>
    â“ DÃºvida
    </option>

    <option value="Proposta de trabalho"
    <?php if ($assunto === 'Proposta de trabalho') echo 'selected'; ?>>
     ðŸ‘©ðŸ»â€ðŸ’» Proposta de trabalho
    </option>

    <option value="Colaboracao"
    <?php if ($assunto === 'Colaboracao') echo 'selected'; ?>>
    â„¹ï¸  ColaboraÃ§Ã£o
    </option>

    <option value="Outro"
    <?php if ($assunto === 'Outro') echo 'selected'; ?>>
    âž¡ï¸  Outro
    </option>
</select>

<label>Mensagem *</label>
<textarea name="mensagem" rows="5"><?= htmlspecialchars($mensagem) ?></textarea>

<button type="submit">Enviar Mensagem</button>

</form>


<!-- Exibir erros -->
<?php if (!empty($erros)): ?>

<div class="alerta-erro">
<h3>âš ï¸ Corrija os erros abaixo:</h3>

<?php foreach ($erros as $erro): ?>
<p>â€¢ <?= htmlspecialchars($erro) ?></p>
<?php endforeach; ?>

</div>

<?php endif; ?>

</div>

<?php include '../includes/rodape.php'; ?>
>>>>>>> e7cfe0f (entregando o atraso)
