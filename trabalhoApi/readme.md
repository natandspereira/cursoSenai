# API Simples em PHP

Este projeto consiste em uma API simples desenvolvida em PHP que fornece três funcionalidades principais:
- Verificar o status da API
- Obter a data e hora do servidor
- Gerar um número aleatório dentro de um intervalo especificado

## 📌 Funcionalidades

### 1. Status da API
Verifica se a API está ativa.
#### Exemplo de requisição:
```
GET http://localhost/trabalhoApi/api/index.php?option=status
```
#### Exemplo de resposta:
```json
{
    "status": 200,
    "message": "API Funcionando",
    "data": []
}
```

### 2. Data e Hora do Servidor
Retorna a data e a hora atuais do servidor.
#### Exemplo de requisição:
```
GET http://localhost/trabalhoApi/api/index.php?option=time
```
#### Exemplo de resposta:
```json
{
    "status": 200,
    "message": "Data e hora do servidor",
    "data": {
        "datetime": "2024-04-02 12:30:45"
    }
}
```

### 3. Número Aleatório
Gera um número aleatório dentro de um intervalo especificado.
#### Exemplo de requisição:
```
GET http://localhost/trabalhoApi/api/index.php?option=random&min=1&max=100
```
#### Exemplo de resposta:
```json
{
    "status": 200,
    "message": "Número aleatório gerado",
    "data": {
        "random": 42
    }
}
```

## 🚀 Como Executar

1. Clone este repositório:
```bash
git clone https://github.com/seu-usuario/seu-repositorio.git
```

2. Certifique-se de ter um servidor local rodando com suporte a PHP, como Apache ou XAMPP.

3. Coloque os arquivos dentro da pasta pública do servidor (exemplo: `htdocs` no XAMPP).

4. Acesse a API através do navegador ou use ferramentas como Postman ou cURL para fazer requisições.

## 🛠 Tecnologias Utilizadas
- PHP
- HTML/CSS
- cURL (para consumo da API)

## 📄 Licença
Este projeto está sob a licença MIT. Sinta-se à vontade para usá-lo e modificá-lo conforme necessário!

---

✉️ Caso tenha dúvidas ou sugestões, entre em contato!

