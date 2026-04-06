<?php
require_once __DIR__ . '/../04_sessoes/includes/auth.php';
requer_login();
require_once __DIR__ . '/includes/conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pdo = conectar();

    $stmt = $pdo->prepare("INSERT INTO projetos (nome, descricao, tecnologias, link_github, ano)
                           VALUES (?, ?, ?, ?, ?)");

    $stmt->execute([
        $_POST['nome'],
        $_POST['descricao'],
        $_POST['tecnologias'],
        $_POST['link_github'] ?: null,
        $_POST['ano']
    ]);

    header("Location: index.php");
    exit;
}
?>

<form method="post">
    <input name="nome" placeholder="Nome"><br>
    <textarea name="descricao"></textarea><br>
    <input name="tecnologias"><br>
    <input name="link_github"><br>
    <input name="ano"><br>
    <button type="submit">Salvar</button>
</form>
