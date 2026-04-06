<?php
/**
 * ==============================================================
 * ARQUIVO    : 04_sessoes/includes/auth.php
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula       : 06 — Sessões e controle de acesso
 * Autor      : Gustavo Henrique Maciel
 * ==============================================================
 */

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

function requer_login()
{
    if (empty($_SESSION['usuario'])) {
        header('Location: login.php');
        exit;
    }
}

function usuario_logado()
{
    return $_SESSION['usuario'] ?? '';
}

function redirecionar_se_logado()
{
    if (!empty($_SESSION['usuario'])) {
        header('Location: painel.php');
        exit;
    }
}
