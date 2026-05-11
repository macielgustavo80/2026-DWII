<<<<<<< HEAD
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
=======
<?php
require_once __DIR__ . '/includes/auth.php';

iniciar_sessao();
redirecionar_se_logado();

$USUARIO_VALIDO = 'admin';
$SENHA_VALIDA   = 'dwii2026';

$erro = '';
$login = '';

$_SESSION['tentativas'] = $_SESSION['tentativas'] ?? 0;

if (!empty($_SESSION['bloqueado_ate']) && time() < $_SESSION['bloqueado_ate']) {
    $erro = 'Muitas tentativas. Tente novamente em alguns segundos.';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $login = trim($_POST['usuario'] ?? '');
    $senha = trim($_POST['senha'] ?? '');

    if (!empty($_SESSION['bloqueado_ate']) && time() < $_SESSION['bloqueado_ate']) {
        // bloqueado

    } elseif ($login === $USUARIO_VALIDO && $senha === $SENHA_VALIDA) {

        session_regenerate_id(true);

        $_SESSION['usuario'] = $login;
        $_SESSION['logado_em'] = date('d/m/Y H:i');
        $_SESSION['visitas'] = 0;

        $_SESSION['flash'] = "Bem-vindo, $login!";

        $_SESSION['tentativas'] = 0;

        header('Location: painel.php');
        exit;

    } else {
        $_SESSION['tentativas']++;

        if ($_SESSION['tentativas'] >= 3) {
            $_SESSION['bloqueado_ate'] = time() + 60;
        }

        $erro = 'Usuário ou senha incorretos.';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="/css/style.css">
    <?php require_once __DIR__ . '/../includes/cabecalho.php'; ?>
</head>
<body>

<div class="container" style="max-width: 420px;">
<div class="form-container">

<h1 class="titulo-secao" style="text-align: center; font-size: 22px;">
    🔐 Área Restrita
</h1>

<?php if (!empty($erro)): ?>
    <div class="alerta-erro">
        ⛔ <?php echo htmlspecialchars($erro); ?>
    </div>
<?php endif; ?>

<form action="login.php" method="post">
    <label>Usuário:</label>
    <input type="text"
           name="usuario"
           value="<?php echo htmlspecialchars($login); ?>"
           autocomplete="username">

    <label>Senha:</label>
    <input type="password"
           name="senha"
           autocomplete="current-password">

    <button type="submit">Entrar</button>
</form>

<p style="text-align: center; margin-top: 20px;">
    <a href="../index.php">← Voltar ao início</a>
</p>

</div>
</div>

<?php require_once __DIR__ . '/../includes/rodape.php'; ?>
</body>
</html>
>>>>>>> e7cfe0f (entregando o atraso)
