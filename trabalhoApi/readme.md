# API de Estados e Utilitários

Este repositório contém uma API simples desenvolvida em PHP que fornece informações sobre estados brasileiros, gera números aleatórios e exibe o status e a data/hora do servidor.

## Tecnologias Utilizadas
- PHP 7+
- JSON
- cURL
- Apache ou outro servidor web
- HTML/CSS para exibição no navegador

## Funcionalidades
A API possui os seguintes endpoints:

### 1. **Status da API**
Verifica se a API está funcionando corretamente.
```bash
GET http://localhost/trabalhoApi/api/index.php?option=status
```
**Resposta:**
```json
{
  "status": 200,
  "message": "API Funcionando",
  "data": []
}
```

### 2. **Data e Hora do Servidor**
Retorna a data e hora atual do servidor.
```bash
GET http://localhost/trabalhoApi/api/index.php?option=time
```
**Resposta:**
```json
{
  "status": 200,
  "message": "Data e hora do servidor",
  "data": {
    "datetime": "2025-04-03 12:00:00"
  }
}
```

### 3. **Gerar um Número Aleatório**
Retorna um número aleatório dentro de um intervalo definido pelo usuário.
```bash
GET http://localhost/trabalhoApi/api/index.php?option=random&min=1&max=50
```
**Resposta:**
```json
{
  "status": 200,
  "message": "Número aleatório gerado",
  "data": {
    "random": 27
  }
}
```

### 4. **Lista de Estados Brasileiros**
Retorna uma lista com todas as unidades federativas do Brasil.
```bash
GET http://localhost/trabalhoApi/api/index.php?option=states
```
**Resposta:**
```json
{
  "status": 200,
  "message": "Lista dos Estados",
  "data": [
    { "uf": "AC", "nome": "Acre" },
    { "uf": "AL", "nome": "Alagoas" },
    { "uf": "AP", "nome": "Amapá" },
    ...
  ]
}
```

### 5. **Busca de Estado por UF**
Permite buscar um estado específico informando sua sigla (UF).
```bash
GET http://localhost/trabalhoApi/api/index.php?option=states_search&uf=SP
```
**Resposta:**
```json
{
  "status": 200,
  "message": "Estado encontrado",
  "data": [
    {
      "uf": "SP",
      "nome": "São Paulo"
    }
  ]
}
```

## Como Executar o Projeto
1. Clone este repositório:
```bash
git clone https://github.com/seu-usuario/seu-repositorio.git
```
2. Configure um servidor local (exemplo: XAMPP, WAMP, ou um servidor Apache com suporte a PHP).
3. Certifique-se de que o arquivo `index.php` esteja dentro do diretório acessível pelo servidor.
4. Acesse via navegador ou utilize ferramentas como `Postman` ou `cURL` para testar os endpoints.
5. Para exibir os resultados no navegador, abra o arquivo `index.html` na raiz do projeto.

## Estrutura do Projeto
```
/
|-- api/
|   |-- index.php  # Arquivo principal da API
|-- css/
|   |-- index.css  # Estilos para a interface web
|-- index.html      # Interface para interação com a API
|-- README.md       # Documentação do projeto
```

## Exemplo de Uso no PHP com cURL
Se desejar consumir essa API em um projeto PHP, você pode utilizar cURL:
```php
function apiRequest($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
}

$estado = apiRequest('http://localhost/trabalhoApi/api/index.php?option=states_search&uf=SP');
print_r($estado);
```





