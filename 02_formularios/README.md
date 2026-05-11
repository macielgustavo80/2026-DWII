# 02_formularios — Formulário de Contato

## Descrição

Esta pasta contém a entrega da Aula 04 de Desenvolvimento Web II.
Foi criado um formulário de contato integrado ao portfólio com validação no servidor e página de confirmação.

## Campos do formulário

- Nome
- E-mail
- Assunto
- Mensagem

## Validações implementadas

- Nome obrigatório
- E-mail obrigatório e válido
- Assunto obrigatório e limitado às opções permitidas
- Mensagem obrigatória
- Mensagem com mínimo de 10 caracteres
- Mensagem com máximo de 500 caracteres
- Preservação dos valores em caso de erro
- Saída protegida com `htmlspecialchars()`

## Como executar

Na raiz do projeto, rode:

```bash
php -S localhost:8000
```

Depois abra:

- `http://localhost:8000/02_formularios/contato.php`
