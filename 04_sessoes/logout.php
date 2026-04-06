<?php
/**
 * ==============================================================
 * ARQUIVO    : 04_sessoes/logout.php
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula       : 06 — Sessões e controle de acesso
 * Autor      : Gustavo Henrique Maciel
 * ==============================================================
 */

session_start();
session_unset();
session_destroy();

header('Location: login.php');
exit;
