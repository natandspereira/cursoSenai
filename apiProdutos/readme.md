## API de Gerenciamento de Produtos
Este projeto fornece uma API simples para gerenciar um catálogo de produtos. Os produtos são armazenados em um arquivo JSON (produtos.json) e as operações de criação, leitura, atualização e exclusão (CRUD) podem ser realizadas via requisições HTTP.

## Funcionalidades
A API permite realizar as seguintes operações:

* GET /produtos

Recupera todos os produtos armazenados no arquivo produtos.json.

* GET /produtos?id={id}

Recupera um produto específico com base no ID fornecido.

* POST /produtos

Adiciona um novo produto. O corpo da requisição deve conter:

nome (string) — Nome do produto.

preco (float) — Preço do produto.

quantidade (int) — Quantidade do produto em estoque.

* PUT /produtos

Atualiza um produto existente. O corpo da requisição deve conter:

id (string) — ID do produto.

nome (string) — Nome do produto.

preco (float) — Preço do produto.

quantidade (int) — Quantidade do produto em estoque.

* DELETE /produtos

Deleta um produto. O corpo da requisição deve conter:

id (string) — ID do produto a ser excluído.

## Estrutura do Código

### Funções principais
* getProducts(): Recupera todos os produtos do arquivo JSON.

* saveProducts($products): Salva a lista de produtos no arquivo produtos.json.

* addProduct($name, $value, $quantity): Adiciona um novo produto à lista de produtos.

* updateProduct($id, $name, $value, $quantity): Atualiza um produto existente com base no ID.

* deleteProduct($id): Deleta um produto da lista com base no ID.

* getProductById($id): Recupera um produto específico baseado no ID.

## Roteamento
A API usa o método HTTP para determinar a ação a ser realizada:

GET: Retorna todos os produtos ou um produto específico (se o ID for fornecido).

POST: Adiciona um novo produto.

PUT: Atualiza um produto existente.

DELETE: Deleta um produto.

## Validação de Entrada
Para POST e PUT, os parâmetros nome, preco e quantidade são obrigatórios.

Para DELETE, o parâmetro id é obrigatório.

Requisitos
Servidor PHP (>= PHP 7.0).

O arquivo produtos.json deve estar acessível e gravável.

### Notas
A API usa o arquivo produtos.json como armazenamento persistente para os dados dos produtos. Certifique-se de que o arquivo esteja no mesmo diretório do script PHP e que tenha permissões adequadas de leitura e gravação.

O arquivo produtos.json será criado automaticamente na primeira execução, caso não exista.

