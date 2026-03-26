# Consulta de CNPJ

Projeto simples em PHP para consultar dados de CNPJ via API pública da ReceitaWS e exibir em uma interface web com Tailwind CSS.

## Tecnologias

- PHP 8.2 (Apache)
- Composer
- Guzzle HTTP
- Tailwind CSS v4
- Docker (opcional)

## Estrutura

- [src/index.php](src/index.php): ponto de entrada
- [src/routes.php](src/routes.php): roteamento básico por controller
- [src/controllers/index.controller.php](src/controllers/index.controller.php): fluxo da página inicial
- [src/models/cnpjApi.model.php](src/models/cnpjApi.model.php): integração com a API de CNPJ
- [src/views](src/views): templates e página
- [infra/compose.yml](infra/compose.yml): ambiente Docker

## Pré-requisitos

### Opção 1 — Com Docker (recomendado)

- Docker e Docker Compose instalados

### Opção 2 — Sem Docker

- PHP 8.2+
- Composer
- Node.js + npm

## Como rodar

### 1) Instalar dependências

No diretório [src](src):

- Composer: `composer install`
- Node: `npm install`

### 2) Gerar CSS do Tailwind

No diretório [src](src):

- Build único: `npx @tailwindcss/cli -i ./input.css -o ./output.css`
- Watch (desenvolvimento): `npx @tailwindcss/cli -i ./input.css -o ./output.css --watch`

### 3) Subir a aplicação

#### Com Docker

No diretório [infra](infra):

`docker compose up -d`

Acesse: http://localhost:8080

#### Sem Docker

No diretório [src](src):

`php -S localhost:8080`

Acesse: http://localhost:8080

## Como usar

1. Abra a página inicial.
2. Digite um CNPJ no formulário.
3. Envie para consultar os dados da empresa.

## Observações

- A API usada é: `https://www.receitaws.com.br/v1/cnpj/{cnpj}`.
- O CNPJ é normalizado no backend (remove caracteres não numéricos).
- Em caso de erro na consulta, o backend retorna um objeto com a chave `error`.

## Melhorias futuras (sugestões)

- Validação de CNPJ no frontend e backend
- Tratamento de erros mais amigável na interface
- Cache de respostas para reduzir chamadas externas
- Testes automatizados
