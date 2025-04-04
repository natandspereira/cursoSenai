# API de Estados e Utilitários

Este repositório contém uma API simples desenvolvida em PHP que fornece informações sobre estados brasileiros, gera números aleatórios e exibe o status e a data/hora do servidor.

## Tecnologias Utilizadas
- PHP
- JSON
- cURL
- HTML/CSS

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






