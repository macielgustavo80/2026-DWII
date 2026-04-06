<?php
/**
 * ==============================================================
 * ARQUIVO    : 04_sessoes/login.php
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula       : 06 — Sessões e controle de acesso
 * Autor      : Gustavo Henrique Maciel
 * ==============================================================
 */

session_start();
require __DIR__ . '/includes/auth.php';
redirecionar_se_logado();

$nome = 'Gustavo Henrique Maciel';
$pagina_atual = '';
$titulo_pagina = 'Login – ' . $nome;
$caminho_raiz = '../';

$usuario_digitado = '';
$mensagem_erro = '';
$agora = time();

if (!isset($_SESSION['tentativas'])) {
    $_SESSION['tentativas'] = 0;
}

if (!isset($_SESSION['bloqueado_ate'])) {
    $_SESSION['bloqueado_ate'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario_digitado = trim($_POST['usuario'] ?? '');
    $senha = $_POST['senha'] ?? '';

    if ($_SESSION['bloqueado_ate'] > $agora) {
        $segundos_restantes = $_SESSION['bloqueado_ate'] - $agora;
        $mensagem_erro = 'Acesso temporariamente bloqueado. Tente novamente em ' . $segundos_restantes . ' segundos.';
    } else {
        $usuario_correto = 'admin';
        $senha_correta = 'dwii2026';

        if ($usuario_digitado === $usuario_correto && $senha === $senha_correta) {
            session_regenerate_id(true);
            $_SESSION['usuario'] = $usuario_digitado;
            $_SESSION['horario_login'] = date('d/m/Y H:i:s');
            $_SESSION['visitas'] = 0;
            $_SESSION['tentativas'] = 0;
            $_SESSION['bloqueado_ate'] = 0;
            $_SESSION['flash'] = 'Bem-vindo, ' . $usuario_digitado . '!';

            header('Location: painel.php');
            exit;
        }

        $_SESSION['tentativas']++;
        $mensagem_erro = 'Usuário ou senha inválidos.';

        if ($_SESSION['tentativas'] >= 3) {
            $_SESSION['bloqueado_ate'] = $agora + 60;
            $mensagem_erro = 'Acesso temporariamente bloqueado. Tente novamente em 60 segundos.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include __DIR__ . '/../includes/cabecalho.php'; ?>
</head>
<body>
    <div class="container">
        <h1>Área restrita do portfólio</h1>
        <p>Faça login para acessar o painel administrativo do portfólio.</p>

        <?php if ($mensagem_erro !== ''): ?>
            <div class="alerta-erro">
                <?php echo htmlspecialchars($mensagem_erro); ?>
            </div>
        <?php endif; ?>

        <form action="login.php" method="post" class="formulario">
            <label for="usuario">Usuário</label>
            <input
                type="text"
                name="usuario"
                id="usuario"
                value="<?php echo htmlspecialchars($usuario_digitado); ?>"
                required
            >

            <label for="senha">Senha</label>
            <input
                type="password"
                name="senha"
                id="senha"
                required
            >

            <button type="submit">Entrar</button>
        </form>

        <p><a href="publico.php" class="link-voltar">← Voltar para a página pública</a></p>
    </div>

    <?php include __DIR__ . '/../includes/rodape.php'; ?>
</body>
</html>
