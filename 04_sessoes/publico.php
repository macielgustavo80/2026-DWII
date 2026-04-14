<<<<<<< HEAD
<?php
/**
 * ==============================================================
 * ARQUIVO    : 04_sessoes/publico.php
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula       : 06 — Sessões e controle de acesso
 * Autor      : Gustavo Henrique Maciel
 * ==============================================================
 */

session_start();
require __DIR__ . '/includes/auth.php';

$nome = 'Gustavo Henrique Maciel';
$pagina_atual = '';
$titulo_pagina = 'Área Pública – ' . $nome;
$caminho_raiz = '../';

$usuario = usuario_logado();
$esta_logado = $usuario !== '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include __DIR__ . '/../includes/cabecalho.php'; ?>
</head>
<body>
    <div class="container">
        <h1>Área pública do portfólio</h1>
        <p>Esta página pode ser acessada sem autenticação e apresenta o caminho para a área restrita.</p>

        <?php if ($esta_logado): ?>
            <div class="alerta-sucesso">
                Você já está logado como <strong><?php echo htmlspecialchars($usuario); ?></strong>.
            </div>
            <p><a href="painel.php" class="btn">Ir ao Painel</a></p>
        <?php else: ?>
            <p>Visitante identificado. Para continuar, acesse a área restrita do sistema.</p>
            <p><a href="login.php" class="btn">Acessar Área Restrita</a></p>
        <?php endif; ?>
    </div>

    <?php include __DIR__ . '/../includes/rodape.php'; ?>
</body>
</html>
=======
<?php
/**
 * Disciplina : Desenvolvimento Web II (DWII)
 * Aula       : 06 â€” AutenticaÃ§Ã£o com sessÃµes e controle de acesso
 * Arquivo    : 04_sessoes/publico.php
 * Autor      : Gustavo Henrique Maciel
 */

session_start(); // verificar se hÃ¡ sessÃ£o (mas nÃ£o exigir)
$logado = isset($_SESSION['usuario']);

$titulo_pagina = 'PÃ¡gina PÃºblica';
$caminho_raiz  = '../';
$pagina_atual  = '';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php require_once __DIR__ . '/../includes/cabecalho.php'; ?>
</head>
<body>

<div class="container" style="text-align: center;">

    <h1 class="titulo-secao">ðŸŒ PÃ¡gina PÃºblica</h1>
    <p>Este conteÃºdo Ã© visÃ­vel para qualquer visitante, sem login.</p>

    <?php if ($logado): ?>
        <p>OlÃ¡, <strong><?php echo htmlspecialchars($_SESSION['usuario']); ?></strong>!
            VocÃª jÃ¡ estÃ¡ autenticado.</p>
        <a href="painel.php"
           style="background: #3ba34a; color: white; padding: 10px 24px;
                  border-radius: 6px; text-decoration: none;
                  font-weight: bold;">
            Ir ao Painel
        </a>
      <?php else: ?>
        <a href="login.php"
           style="background: #3b579d; color: white; padding: 10px 24px;
                  border-radius: 6px; text-decoration: none;
                  font-weight: bold;">
            ðŸ” Acessar Ãrea Restrita
        </a>
    <?php endif; ?>

</div>

<?php require_once __DIR__ . '/../includes/rodape.php'; ?>
</body>
</html>
>>>>>>> e7cfe0f (entregando o atraso)
