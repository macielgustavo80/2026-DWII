<?php
/**
<<<<<<< HEAD
 *
 * ==============================================================
 * ARQUIVO    : includes/nav.php
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula       : 05 — PHP + MariaDB: persistência de dados via PDO
 * Autor      : [Gustavo Henrique Maciel]
 * Conceitos  : Menu dinâmico, operador ternário, $caminho_raiz
 * ==============================================================
 *
 */

if (!isset($pagina_atual)) $pagina_atual = '';
if (!isset($caminho_raiz)) $caminho_raiz = '../';

function menu_class($item, $atual) {
    return ($item === $atual) ? 'class="ativo"' : '';
}
?>
<nav>
    <a href="<?php echo $caminho_raiz; ?>01_php-intro/index.php" <?php echo menu_class('inicio', $pagina_atual); ?>>Início</a>
    <a href="<?php echo $caminho_raiz; ?>01_php-intro/sobre.php" <?php echo menu_class('sobre', $pagina_atual); ?>>Sobre</a>
    <a href="<?php echo $caminho_raiz; ?>01_php-intro/projetos.php" <?php echo menu_class('projetos', $pagina_atual); ?>>Projetos</a>
    <a href="<?php echo $caminho_raiz; ?>02_formularios/contato.php" <?php echo menu_class('contato', $pagina_atual); ?>>Entre em contato</a>
    <a href="<?php echo $caminho_raiz; ?>03_pdo/index.php" <?php echo menu_class('catalogo', $pagina_atual); ?>>Tecnologias</a>
</nav>
=======
 * ===============================================================
 * Arquivo: includes/nav.php 
 * Disciplina: Desenvolvimento Web II (2026-DWII)
 * Aula: 04 - PHP para Web: FormulÃ¡rios, GET e POST
 * Autor: Gustavo Henrique Maciel
 * Conceitos: Menu dinÃ¢mico, operador ternÃ¡rio, $caminho_raiz
 * ===============================================================
 * 
 * Mesmo padrÃ£o do nav.php da Aula 03, com duas melhorias:
 *  1. Link montados via $caminho_raiz - funciona de qualquer pasta
 *  2. Classe CSS "ativo" em vez de style inline - CSS externo controla
 * 
 * VariÃ¡veis esperadas:
 *  $pagina_atual - string: identifica qual item destacar no menu
 *  $caminho_raiz - string: caminho relativo atÃ© a raiz
 */

// Valores padrÃ£o: evita erro se a pÃ¡gina esquecer de declarar
if (!isset($pagina_atual)) $pagina_atual = "";
if (!isset($caminho_raiz)) $caminho_raiz = "../";

/**
 * menu_class() - retorna 'class="ativo"' se o item corresponde
 * Ã  pÃ¡gina atual, ou '' caso contrÃ¡rio.
 * Substitui os quatro operadores ternÃ¡rios repetidos da Aual 03
 * por uma funÃ§Ã£o reutilizÃ¡vel - menos cÃ³digo, mesma lÃ³gica.
 */
function menu_class($item, $atual) {
  return ($item === $atual) ? 'class="ativo"': '';
}
?>

<!-- nav usa a classe CSS definida em style.css - sem style inline --> 
 <nav>
  <!-- Links para o portfÃ³lio - Aula 03 -->
  <a href="<?php echo $caminho_raiz; ?>01_php-intro/index.php"
    <?php echo menu_class("inicio", $pagina_atual); ?>>
      InÃ­cio
  </a>
    <a href="<?php echo $caminho_raiz; ?>01_php-intro/sobre.php"
    <?php echo menu_class("sobre", $pagina_atual); ?>>
      Sobre
  </a>
    <a href="<?php echo $caminho_raiz; ?>01_php-intro/projetos.php"
    <?php echo menu_class("projetos", $pagina_atual); ?>>
      Projetos
  </a>
  <a href="<?php echo $caminho_raiz; ?>03_pdo/index.php"
   <?php echo menu_class("catalogo", $pagina_atual); ?>>
   CatÃ¡logo
  </a>

  <!-- Link para o formulÃ¡rio - Aula 04 -->
     <a href="<?php echo $caminho_raiz; ?>02_formularios/contato.php"
    <?php echo menu_class("contato", $pagina_atual); ?>>
      Entre em contato
  </a>
</nav>
>>>>>>> e7cfe0f (entregando o atraso)
