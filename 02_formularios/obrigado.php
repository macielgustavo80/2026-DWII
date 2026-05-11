<?php
/**
<<<<<<< HEAD
 * ════════════════════════════════════════════════════════════
 * ARQUIVO    : 02_formularios/obrigado.php
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula       : 04 — PHP para Web: formulários, métodos GET e POST
 * Autor      : Gustavo Henrique Maciel
 * Conceitos  : PRG, $_GET, htmlspecialchars()
 * ════════════════════════════════════════════════════════════
 */

$nome = 'Gustavo Henrique Maciel';
$pagina_atual = 'contato';
$titulo_pagina = 'Obrigado – ' . $nome;
$caminho_raiz = '../';

$nome_visitante = trim($_GET['nome'] ?? 'Visitante');
$assunto = trim($_GET['assunto'] ?? 'Não informado');

if ($nome_visitante === '') {
    $nome_visitante = 'Visitante';
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/cabecalho.php'; ?>
</head>
<body>
    <div class="confirmacao">
        <h1>Obrigado, <?php echo htmlspecialchars($nome_visitante); ?>!</h1>
        <p>Sua mensagem foi recebida com sucesso.</p>
        <p><strong>Assunto:</strong> <?php echo htmlspecialchars($assunto); ?></p>
        <p><a href="contato.php" class="btn">Enviar outra mensagem</a></p>
    </div>

    <?php include '../includes/rodape.php'; ?>
</body>
</html>
=======
 * -------------------------------------------------------------
 * ARQUIVO : 02_formularios/obrigado.php
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula : 04 â€“ PHP para Web: FormulÃ¡rios, GET e POST
 * Autor : Gustavo Henrique Maciel
 * Conceitos : header() + exit (PRG), $_GET para parÃ¢metros
 *              de confirmaÃ§Ã£o, htmlspecialchars()
 * -------------------------------------------------------------
 *
 * PÃ¡gina de confirmaÃ§Ã£o â€” destino do redirecionamento PRG.
 * Recebe o nome via GET apenas para exibiÃ§Ã£o amigÃ¡vel.
 * Nenhum dado de formulÃ¡rio Ã© processado aqui.
 */

// â€” VARIÃVEIS DO TEMPLATE
$nome = "Gustavo Henrique Maciel";
$pagina_atual = "contato"; // mantÃ©m "contato" ativo no menu
$caminho_raiz = "../";
$titulo_pagina = "Obrigado";

// Recebe o nome enviado pelo header() em contato.php
// ?? 'visitante' garante fallback se alguÃ©m acessar direto
$nome_visitante = htmlspecialchars($_GET['nome'] ?? 'visitante');

?>

<!-- cabecalho.php gera DOCTYPE, head, body, header e nav -->
<?php include '../includes/cabecalho.php'; ?>

<div class="container">

<div class="confirmacao">

<p class="confirmacao-icone">âœ…</p>

<h2 class="confirmacao-titulo">
Mensagem enviada com sucesso!
</h2>

<p class="confirmacao-texto">
Obrigado, <strong><?= $nome_visitante ?></strong> ðŸŽ‰
</p>

<p class="confirmacao-texto">
Sua mensagem foi recebida. Retornarei em breve.
</p>

<div class="botoes">

<a href="../index.php" class="botao">
ðŸ  Voltar ao PortfÃ³lio
</a>

<a href="contato.php" class="botao-outline">
ðŸ“® Enviar outra mensagem
</a>

</div>

</div>

</div>

<?php include '../includes/rodape.php'; ?>
>>>>>>> e7cfe0f (entregando o atraso)
