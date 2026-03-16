# 03_pdo — Catálogo de Tecnologias

## Descrição

Esta pasta contém um catálogo dinâmico de tecnologias usando PHP, PDO e MariaDB.
A listagem é carregada do banco de dados e cada item possui uma página de detalhe.

## Estrutura da tabela

Tabela: `tecnologias`

- `id` — identificador do registro
- `nome` — nome da tecnologia
- `categoria` — categoria da tecnologia
- `descricao` — descrição da tecnologia
- `ano_criacao` — ano de criação
- `criado_em` — data/hora de cadastro

## Arquivos

- `index.php` — listagem completa com filtro e busca
- `detalhe.php` — página de um item
- `404.php` — página exibida quando o ID não existe
- `includes/conexao.php` — conexão PDO reutilizável
- `includes/cab_pdo.php` — proxy do cabeçalho global
- `includes/rod_pdo.php` — proxy do rodapé global
- `sql/setup.sql` — script da tabela e inserts

## Como executar

Na raiz do projeto:

```bash
php -S localhost:8000
```

Depois acesse:

- `http://localhost:8000/03_pdo/index.php`
