<?php
/**
 * ════════════════════════════════════════════════════════════
 * ARQUIVO    : 03_pdo/includes/cab_pdo.php
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula       : 05 — PHP + MariaDB: persistência de dados via PDO
 * ════════════════════════════════════════════════════════════
 *
 * Proxy local que reutiliza o cabecalho.php global da raiz /includes/
<<<<<<< HEAD
 */

// Garantir valores padrão caso a página não defina essas variáveis
if (!isset($titulo_pagina)) $titulo_pagina = 'Catálogo de Tecnologias';
if (!isset($pagina_atual))  $pagina_atual  = 'catalogo';
=======
 * __DIR__ = 03_pdo/includes/  →  ../../includes/ = raiz/includes/
 */

// Garantir valores padrão caso a página não defina essas variáveis
if (!isset($titulo_pagina)) $titulo_pagina = "Catálogo de Tecnologias";
if (!isset($pagina_atual))  $pagina_atual  = "";
>>>>>>> e7cfe0f (entregando o atraso)

// Caminho relativo da subpasta 03_pdo/ até a raiz do repositório
$caminho_raiz = '../';

// Incluir o cabeçalho global usando caminho absoluto no servidor
include __DIR__ . '/../../includes/cabecalho.php';
<<<<<<< HEAD
=======
?>
>>>>>>> e7cfe0f (entregando o atraso)
