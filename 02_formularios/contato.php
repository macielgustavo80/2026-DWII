<?php
/**
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
    $nome_visitante = trim($_POST['nome_visitante'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $assunto = trim($_POST['assunto'] ?? '');
    $mensagem = trim($_POST['mensagem'] ?? '');

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
        exit;
    }
}

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
